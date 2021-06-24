world = ['usa', 'uk', 'turkey', 'barli', 'china', 'berlin', 'egypt', 'korea', 'rome', 'greece']

print(f'The original list: {world}')

print(f'Sorted list {sorted(world)}')

print(f'The original list again: {world}')

world.reverse()
print(f'The list in reverse: {world}')

world.sort()
print(f'The list in sort: {world}')

world.sort(reverse=True)
print(f'The list in sort reverse: {world}')