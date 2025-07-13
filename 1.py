import numpy as np
import matplotlib.pyplot as plt
from sklearn.linear_model import LinearRegression
from sklearn.model_selection import train_test_split

# --- 1. Generate some synthetic data for demonstration ---
# Imagine you're trying to predict house prices based on their size.
# Sizes (in square meters) - our 'feature' (X)
X = np.array([50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150]).reshape(-1, 1)
# Prices (in thousands of Brazilian Reais) - our 'target' (y)
y = np.array([150, 170, 185, 200, 215, 230, 245, 260, 275, 290, 305])

print("--- Data Generated ---")
print(f"Sizes (X):\n{X.flatten()}")
print(f"Prices (y):\n{y}")
print("-" * 20)
 
# --- 2. Split data into training and testing sets ---
# This is crucial for evaluating how well our model generalizes to new, unseen data.
# We'll use 80% for training and 20% for testing.
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

print("--- Data Split ---")
print(f"Training data points: {len(X_train)}")
print(f"Testing data points: {len(X_test)}")
print("-" * 20)

# --- 3. Create and train the  Linear Regression model ---
# We're creating an 'instance' of the LinearRegression model.
model = LinearRegression()

# 'Training' means the model learns the relationship between X_train and y_train.
# It figures out the best line that fits this data.
print("Training the model...")
model.fit(X_train, y_train)
print("Model trained successfully!")
print("-" * 20)

# --- 4. Make predictions ---
# Now, let's see what prices the model predicts for the test sizes.
y_pred = model.predict(X_test)

print("--- Predictions ---")
print(f"Test Sizes (X_test):\n{X_test.flatten()}")
print(f"Actual Prices (y_test):\n{y_test}")
print(f"Predicted Prices (y_pred):\n{y_pred.round(2)}") # Round for cleaner output
print("-" * 20)

# --- 5. Evaluate the model ---
# The 'score' (R-squared) tells us how well the predictions fit the actual values.
# 1.0 means a perfect fit.
score = model.score(X_test, y_test)
print(f"Model R-squared score on test data: {score:.2f}")
print("-" * 20)

# --- 6. Use the trained model to predict a new value ---
new_house_size = np.array([[105]]) # A new size not in our original data
predicted_price = model.predict(new_house_size)
print(f"Prediction for a new house size of {new_house_size.flatten()[0]} sq.m: R$ {predicted_price.flatten()[0]:.2f} thousand")
print("-" * 20)

# --- 7. Visualize the results ---
plt.figure(figsize=(10, 6))
plt.scatter(X, y, color='blue', label='Actual Data Points')
plt.plot(X, model.predict(X), color='red', label='Regression Line')
plt.scatter(X_test, y_pred, color='green', marker='x', s=100, label='Predicted Test Points')
plt.scatter(new_house_size, predicted_price, color='purple', marker='*', s=200, label='New Prediction')
plt.title('House Price Prediction using Linear Regression')
plt.xlabel('House Size (sq.m)')
plt.ylabel('House Price (R$ thousand)')
plt.legend()
plt.grid(True)
plt.show()