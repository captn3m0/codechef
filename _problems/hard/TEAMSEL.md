---
languages_supported:
    - NA
title: TEAMSEL
category: NA
old_version: true
problem_code: TEAMSEL
tags:
    - NA
layout: problem
---
One of the cherished customs of my childhood was choosing up sides for a cricket game. We did it this way: The two bullies of our gully would appoint themselves captains of the opposing teams, and then they would take turns picking other players. On each round, a captain would choose the most capable (or, towards the end, the least inept) player from the pool of remaining candidates, until everyone present had been assigned to one side or the other. The aim of this ritual was to produce two evenly matched teams and, along the way, to remind each of us of our precise ranking in the neighbourhood pecking order.

We all believed this was the fairest process, but does it ensure the fairest selection of players with evenly matched teams? We believed so, but then there were times when, as the game progressed we realized that the other team was stronger than ours and may be an exchange of a couple of players between the teams would have made them balanced. That scope of improvement seemed to be there...

Here, we need to find a way to create two evenly balanced teams for any game(or as evenly balanced as possible considering the strength of each player). A set of players must be divided into two teams. Each player must be on one team or the other; the number of player on the two teams must not differ by more than 1; each player will have a skill-point associated with him. The total skill-points of the players on each team should be as nearly equal as possible.(The absolute difference of the sum of skill-points of players in each team should be the least).

### Input

The first line of input will contain the number of test cases 'T'(1<=T<=100). This is followed by 'T' test cases. Each test case starts with a blank line, followed by N, the total number of players. N lines will follow with the first line giving the skill-point of person 1; the second line, the skill-point of person 2; and so on. Each skill-point shall be an integer between 1 and 450. There shall be at most 100 players in all(1<=N<=100).

### Output

Your output should be exactly '2T-1' lines. The output for each test case should be followed by a blank line, except the output for the last test case. Each odd numbered line should contain 2 numbers: the total skill-points of the players on one team, and the total skill-points of the players on the other team. Print the smaller sum first.

### Example

<pre>
<b>Input:</b>
4

3
90
200
100

10
2
3
10
5
8
9
7
3
5
2

10
1
1
1
1
1
1
1
1
1
9

8
87
100
28
67
68
41
67
1

<b>Output:</b>
190 200

27 27

5 13

229 230
</pre>