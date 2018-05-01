---
languages_supported:
    - NA
title: CIELBTL
category: NA
old_version: true
problem_code: CIELBTL
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Ciel bought a new video game for guests to kill time until their orders arrive. In this game, you are a fighter in a battle arena, and you will fight against a fighter called _Shindannin_. In Japan, many people believe that the next day will be a happy day if they beat Shindannin, otherwise the next day will be an unhappy day.

Let's start by defintions of some variables. **VA** and **VB** denote your initial HP (health points) and Shindannin's initial HP respectively. **SA** and **SB** denote your strength and Shindannin's strength respectively. **MA** denotes your initial MP (magical points), which is used when you use a skill. Note that only you can use a skill in the battle.

In each turn, the battle will go on as follows:

- Firstly, you can use a skill as many times as you like as long as your MP is positive. If you use a skill, your HP and Shindannin's HP are decreased by half and your MP is decreased by 1. If HP becomes a non-integer, HP will be rounded up to the nearest integer. To be more precise, new HP will be ceil(old HP / 2).
- Next, an integer **s** is chosen in \[0, **SA**\] uniformly randomly, and an integer **t** is chosen in \[0, **SB**\] uniformly randomly.
- Then, your HP is decresed by **t**, and Shindannin's HP is decreased by **s** simultaneously.
- If both fighter have positive HP, next turn will occur.

When a fighter's HP is down to zero or a negative integer, this fighter loses. If both fighters' HP is down to zero or negative integer simultaneously, you will fight against Shindannin again with the same conditions, that is, HP and MP are recovered completely before next battle. There is no limit on the number of rematches. If you fight optimally, what is your winning percentage?

### Input

An input contains 5 integers **VA**, **VB**, **SA**, **SB** and **MA**.

### Output

Print the maximum winning percentage you can achieve. This value must have an absolute error no more than 10-6.

### Constraints

1 ≤ **VA**, **VB** ≤ 100
 1 ≤ **SA**, **SB** ≤ 100
 0 ≤ **MA** ≤ 5

### Sample Input 1

`5 5 3 3 0`### Sample Output 1

`0.5`### Sample Input 2

`5 5 3 3 1`### Sample Output 2

`0.58886609097948`### Sample Input 3

`58 85 8 13 0`### Sample Output 3

`0.00011046536069`
