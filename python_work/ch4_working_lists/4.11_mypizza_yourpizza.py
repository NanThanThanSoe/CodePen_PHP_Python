pizzas = ['Margherita', 'Marinara', 'Capricciosa', 'Quattro Stagioni', 'Diavola', 'Vegetariana']

friend_pizzas = pizzas[:]

pizzas.append('Boscaiola')
friend_pizzas.append('Frutti di Mare')

#print(f"My favourite pizzas are {pizzas}")
#print(f"My friends favourite pizzas are {friend_pizzas}")

for pizza in pizzas:
	print(f"My favourite pizza are {pizza}")

for fripizza in friend_pizzas:
	print(f"My friend favourite pizza are {fripizza}")