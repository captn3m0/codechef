---
languages_supported:
    - NA
title: TWOCHEFS
category: NA
old_version: true
problem_code: TWOCHEFS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Two chefs are working in a kitchen with two ovens. Each chef has a list of dishes to prepare. Each chef must complete the dishes on his list, and in the order in which they appear on his list. The chefs have already prepared the items, and need only cook them. Each oven can only cook one dish at a time, and once a dish enters an oven it must remain in the oven for the full cooking time. A dish is considered completed when it is done cooking. That is, dishes need not enter the ovens in order, but must finish cooking in order (it is okay for 2 dishes from the same chef to finish cooking simultaneously). The chefs cannot clean up and go home until both of them have completed all their dishes, and they want to go home as soon as possible. Your task is to determine the minimal amount of time it will take the chefs to complete all dishes.

### Input:

Input consists of 3 lines. The first line contains 2 integers N1 and N2, the number of dishes to be completed by the first and second chefs, respectively. The second line contains N1 integers giving the cooking times of the first chef's dishes, in the order in which they must be completed. The third line contains N2 integers giving the cooking times of the second chef's dishes, in the order in which they must be completed.

### Output:

Output on a single line the minimum amount of time (in minutes) for both chefs to complete all dishes.

### Example

**Input 1:**

```
4 4
20 20 25 25
40 10 10 40
 
```
**Ouput 1:**

```
100
 
```
One way to finish in 100 minutes is for the one chef to cook all his dishes in one oven, and the other chef to cook all his dishes in the other oven. Note that although the dishes could be cooked in only 95 minutes, they cannot be completed in the correct order in only 95 minutes.

**Input 2:**

```
3 1
15 16 21
10
 
```
**Output 2:**

```
31
 
```
One oven will cook the 10 minute and 21 minute dishes, the other the 15 and 16 minute dishes. The first chef's third dish enters an oven before his second dish, but the dishes finish cooking at the same time and therefore are still considered to have completed in the correct order.

### Constraints:

1 ≤ N1 ≤ 50
 1 ≤ N2 ≤ 50
 All cooking times are between 1 and 60 minutes, inclusive.