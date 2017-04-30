---
languages_supported:
    - NA
title: DCE04
category: NA
old_version: true
problem_code: DCE04
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Titanic ship is sinking. The nearest ship has answered the SOS call, and come to rescue the people. Everyone is anxious to get to safety. Unfortunately, the new ship may not have enough room to take everyone to safe land. This adds to the anxiety of people. 
To avoid stampede, there has to be some rescue plan. You are made incharge of this. You have to make sure that as many people are safe as possible. Given the capacity of the ship, that is, the number of people that can board the ship, you have to calculate how many men, women and children can be sent to safety.
The following rules apply:
\* The foremost priority is safety for children, but there must be atleast one adult (a man or a woman) for every four children sent to the rescue ship. For upto four children, one adult, for five to eight children, 2 adults, and so on.
\* Next priority is for women, but there must be at least one man for every two women. For upto two women, one man, for three to four women, two men, and so on.

### Input

First line contains the number of test cases (t less than 10000)
The next t lines contain four integers (each between 1 to 10000 inclusive) each separated by a single space. The integers represent the capacity of the rescue ship, number of men on TITANIC, number of women and number of children, in this order.

### Output

Display t lines, each line has three space separated integers denoting the number of men, women and children put to safety, in this order.

### Example

```

<b>Input:</b>
3
17 5 10 19
18 2 6 10
20 5 2 23

<b>Output:</b>
2 2 13
2 4 10
2 2 16


<b>Explanation:</b>
Explanation for case 2: Since only 2 men are present, the number of women can not be more than 4.

```