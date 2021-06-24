my_foods = ['pizza', 'falafel', 'carrot cake']

friend_foods = my_foods[:]  #copy array

my_foods.append('cannoli')
friend_foods.append('ice cream')

print(f"My favourite foods are: {my_foods}")

print(f"My friend favourite foods are: {friend_foods}")


friend_foods = my_foods #associate this two list

my_foods.append('cannoli')
friend_foods.append('ice cream')


print(f"My favourite foods are: {my_foods}")

print(f"My friend favourite foods are: {friend_foods}")