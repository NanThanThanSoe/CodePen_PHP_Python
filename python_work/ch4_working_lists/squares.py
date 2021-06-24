squares = []
for value in range(1,11):
	#square = value ** 2   #** represent exponents
	#squares.append(square)
	squares.append(value ** 2)

print(squares)


digits = [1,2,3,4,5,6,7,8,9,0]
print(min(digits))
print(max(digits))
print(sum(digits))

squares = [value**2 for value in range(1,11)]
print(squares)

hello = [item for item in range(2,20,2)]
print(hello)
