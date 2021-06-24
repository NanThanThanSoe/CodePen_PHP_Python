motorcycles = ['hond', 'yamaha', 'suzuki']

#print(motorcycles)

#motorcycles[0] = 'ducati'

#print(motorcycles)

#motorcycles.append('ducati')

print(motorcycles)


new = []

new.append('car')
new.append('bike')
new.append('cat')

print(new)


motorcycles.insert(0, 'ducati')
print(motorcycles)

motorcycles.insert(3, 'INSERT')
print(motorcycles)

#del motorcycles[0]
#print(motorcycles)

poped_motorcycle = motorcycles.pop()
print(motorcycles)
print(f'The last motorcycle I own as a {poped_motorcycle.title()}.')

first_own = motorcycles.pop(0)
print(f'This first motorcycle I owned was a {first_own.title()}.')


too_expensive = 'yamaha'
motorcycles.remove(too_expensive)
print(motorcycles)
print(f'\n An {too_expensive.title()} is too expensive for me.')
