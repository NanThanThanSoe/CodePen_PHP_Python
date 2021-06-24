guest = ['asgar', 'okka', 'berthold', 'lan', 'nan', 'lianne']


for g1 in range(4):
	g1 = guest.pop(0)
	print(f'I am sorry {g1} for could not invit you for dinner anymore.')

print(guest)

print(f'I still invite you two: {guest[0].title()} and {guest[1].title()} to join my dinner.')