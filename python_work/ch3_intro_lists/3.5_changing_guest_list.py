guest = ['asgar', 'okka', 'berthold']

print(f'My guests for tonight dinner are: {guest[0].title()}, {guest[1].title()} and {guest[2].title()}.')

cancel = guest.pop(-1)

print(f'the updated guest list {guest}')
print(f'the guest who couldnt join the dinner is {cancel.title()}.')
