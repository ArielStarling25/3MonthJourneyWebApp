#6 For-Loop
listItems = ['Apple', 'Banana', 'Grapes', 'Pineapple', 'Starfruit', 'Lychee', 'Rambutan']
for items in listItems:
    print(items)
print("")

for nums in range(1,6):
    print(nums)
print("")

for nums in range(0,7):
    print(nums, listItems[nums])
print("")

print(listItems)
listItems.append("Papaya")
listItems.append("Kiwi")
listItems.append("Pear")
print(listItems)
print("")

for nums in range(len(listItems)):
    print(nums, listItems[nums])
print("")

print(len(listItems))
print("")