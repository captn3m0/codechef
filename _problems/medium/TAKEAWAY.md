---
languages_supported:
    - NA
title: TAKEAWAY
category: NA
old_version: true
problem_code: TAKEAWAY
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you hear about Zeta Reticuli ? Its a star system deep in the southern sky, and this is where the first Alien film is set. Zetas are the aliens living there and they like playing games with humans. This year they selected Nancy and took her with them to play the famous Zeta-Nim game. Given N piles of stones and a value K, each pile i has a counter Ci which is the maximum number of stones that can be removed from it. Initially, Ci = K for 0 &lt;= i &lt; N. Each turn involves selecting one of the N piles, say pile i, and removing R ( 1 &lt;= R &lt;= Ci ) stones from it and updating Ci = R. In other words, the number of stones removed from a pile should not be more than the number of stones removed from the same pile before, starting with removal of at most K stones.

Zeta and Nancy take turns alternately and the one who can not remove any more stones lose. Given N, K and the number of stones in each of the N piles, find who wins the game if both play optimally and Nancy starts first.

### Input

First line contains T, number of test cases. Each case contains 2 lines. First line contains N K and the second line contains the array A of N space separated integers. A\[i\] is the number of stones in the ith pile.

### Output

For each test case, print the winners name "Nancy" or "Zeta" ( without quotes ).

### Constraints

1 ≤ T ≤ 200
1 ≤ N ≤ 50
1 ≤ A\[i\] ≤ 2012
1 ≤ K ≤ 100,000

### Example

<pre>
<b>Input:</b>
3
1 1
3
2 2
3 3
5 10
5 10 15 20 25


<b>Output:</b>
Nancy
Zeta
Nancy
</pre>

**Explanation:**
Case 1 : Only one pile of 3 stones and K = 1. At most 1 stone can be removed in each step ( and of course at least 1 stone must be removed, if possible). Nancy removes 1 stone, then Zeta removes 1 stone and finally Nancy removes the last stone and wins !

Case 2 : Two piles of stones with 3 stones in each and K = 2. Initial pile sizes are {3,3} and after Nancy takes either 1 or 2 stones from one of them, the piles will be one of {2,3} or {1,3}. If its {2,3}, Zeta can remove a stone from the 2nd pile to make it {2,2} and win eventually. If its {1,3}, Zeta can remove two stones from the2nd pile to make it {1,1} and win in its next turn. So, no matter what step Nancy takes in her first turn, Zeta always has a winning strategy !

***Note :** There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted.*
