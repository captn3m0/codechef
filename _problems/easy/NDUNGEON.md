---
languages_supported:
    - NA
title: NDUNGEON
category: NA
old_version: true
problem_code: NDUNGEON
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Nikhil has designed the following game. The game is played in a set of rooms in a dungeon, arranged in an _M N_rectangular grid. In one of the rooms, the evil wazir has imprisoned the princess. The noble prince is on his way to rescue the princess.

The prince starts in the room at the top left corner of the grid, which is labelled (1,1). Each room contains some guards. It takes a certain amount of time before the prince can kill all the guards in the room he is in. The time taken to kill the guards varies from room to room. Once he has killed all the guards in a room, he can move on to any one of its neighbours by going left, right, up or down, provided, of course, that there is a neighbouring room in the corresponding direction.

The wazir, knowing that the prince is on his way, has set a time bomb that will kill the princess after _T_ seconds. You will be given the position of the princess, the time left for the bomb to go off and the time it takes for the prince to kill the guards in each of the rooms in the dungeon. Your task is to determine if it is possible for the prince to reach the princess and save her by defusing the bomb before the _T_ seconds expire.

 For example, suppose the dungeon is described by the following grid of numbers.

```
2 3 2
2 5 1
5 3 1
3 1 1

```
The number at position _(i,j)_ indicates the time taken for the prince to overpower the guards in room _(i,j)_. Suppose the princess is in the room at position (4,2). If _T_ = 10. there is no way the prince can reach the princess in time. However, if _M_ = 15, the prince can reach the princess with 4 seconds to spare, as follows. Starting from (1,1), he moves right to (1,2) and then (1,3), comes down all the way to (4,3) and then moves (4,2). This takes 11 seconds (note that he must also overpower the guard in the room where the princess is incarcerated). You can check that he cannot reach the princess with more than 4 seconds to spare by any route.

### Input

The first line contains two integers M and N indicating the number of rows and columns in the rectangular dungeon. Lines 2,3, ,M+1 contain N positive integers. The jth integer on line i+1 is the time taken to overpower the guards at room (i,j). The last line in the input, line M+2, contains three integers a, b and T, where (a,b) is the position of the cell where the princess is held and T is the amount of time before the bomb goes off.

### Output

If it is not possible for the prince to save the princess then print a single line with the answer NO. Otherwise, print two lines. The first line should say YES. The second line should contain a single integer indicating the maximum possible time to spare when the prince rescues the princess.

### Constraints

You may assume that 1 N,K 70.

### Example

```

<b>Input:</b>
4 3 
2 3 2
2 5 1
5 3 1
3 1 1
4 2 15

<b>Output:</b>
YES
4

```