---
category_name: medium
problem_code: CHN07
problem_name: 'Malvika and Animesh play Red-Blue cards Game'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 15-01-2016
tags:
    - acm15chn
    - admin2
    - game
editorial_url: 'http://discuss.codechef.com/problems/CHN07'
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493557565
layout: problem
---
All submissions for this problem are available.After 2 hours of Mathematics and chill, Malvika and Animesh got bored of solving problems and decided to play a game. They have **n** cards with them, each of which is red on one side and blue on the other. They initially put them in a row, from left to right. They then takes turns, with Malvika going first.

In a single turn, the player should choose a card which has its red face up. The player also chooses zero or more consecutive blue faced cards, with the sequence starting immediately on the right of the chosen red card. All the chosen cards are then flipped. That is, the red faced card will now be blue. The zero or more blue faced cards will now be red. Then the turn ends, and it's the other player's turn.

You will be given the initial arrangement of the **n** cards as a string of R's and B's, which imply red facing-up and blue facing-up, respectively. They will be given in order, from left to right.

The player who is not able to make any move in his/her turn loses. Find out the winner, assuming that both Malvika and Animesh play optimally.

### Input

- The first line of input contains a single integer **T** denoting the number of test cases.
- The only line of each test case contains a string of 'R's and 'B's.

### Output

- For each test case, output a single line. It should be "Malvika" (without quotes) if Malvika is the winner, and "Animesh" (without quotes) if Animesh is the winner.

### Constraints

- 1 ≤ **T** ≤ **100**
- 1 ≤ **n** ≤ **500**, where **n** refers to the length of each string.

### Example

<pre><b>Input:</b>
2
R
BB

<b>Output:</b>
Malvika
Animesh
</pre>
### Explanation

**In the first example**, Malvika will flip the red faced card in the first move, so it will now be blue faced. Now Animesh can't make any move, so he will lose. Hence Malvika is the winner.

**In the second example**, Malvika can not make any move in the first turn itself, and therefore she loses. Hence Animesh is the winner.
