---
category_name: medium
problem_code: BRIBETR
problem_name: 'Bear and Bribing Tree'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: errichto
date_added: 23-02-2017
tags:
    - dynamic
    - errichto
    - ltime45
    - medium
    - two
editorial_url: 'https://discuss.codechef.com/problems/BRIBETR'
time:
    view_start_date: 1488042300
    submit_start_date: 1488042300
    visible_start_date: 1488042300
    end_date: 1735669800
    current: 1493557491
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME45/mandarin/BRIBETR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME45/russian/BRIBETR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME45/vietnamese/BRIBETR.pdf) as well.

Limak is a big grizzly bear who loves wrestling. He is going to participate in a coming tournament.

There will be N = 2**H** bears participating in the tournament. Bears are numbered 1 through N and Limak has index 1. Each bear has a unique value **x**i representing his or her strength. The tournament is divided into **H** stages. In each stage bears are divided into pairs according to their indices (more info in the next paragraph). In each pair, the two bears fight with each other and one of them wins (there are no draws). The loser is eliminated, while the winner advances to the next stage.

In each stage, the remaining bears are sorted by their initial index. Then, the first two bears are in one pair, next two are in the second pair, and so on. So in the first stage there are N/2 matches: one between bear 1 and bear 2, one between bear 3 and bear 4, and so on (the last match between bear N-1 and bear N). In the second stage, the winner of the fight between bear 1 and bear 2, will fight against the winner of the fight between bear 3 and bear 4, and so on.

Usually, when two bears fight with each other, the one with greater strength wins. But grizzly bears aren't always honest and fair. In each match (no matter if he fights in it or not), Limak can bribe the referee and change the winner of this match. To avoid suspicion, he can do it only if the difference between strengths of the two bears doesn't exceed **K**.

For example, let's say that **K** = 10. If two bears with strength 70 and 85 fight with each other, the one with strength 85 must win. But if their strengths are 70 and 78 (or e.g. 70 and 80), Limak can bribe the referee and then the bear with strength 70 wins — but obviously Limak doesn't have to bribe the referee and then the bear with greater strength automatically wins.

What is the minimum number of times Limak has to bribe a referee, if he wants to win the tournament? Output -1 if he can't win.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **H** and **K** denoting the number of stages and the maximum allowed difference of strengths between bears for Limak to bribe the referee. Note that N = 2**H**.

The second line of a test case contains N distinct integers: **x**1, **x**2, ..., **x**N, where **x**i denotes the strength of the i-th bear. Limak has index 1 so his strength is **x**1.

### Output

For each test case, output a single line containing one integer — the minimum number of times Limak has to bribe a referee. If he can't win the tournament, output -1 instead.

### Constraints

- 1 ≤ **T** ≤ 3
- 2 ≤ **H** ≤ 17
- 1 ≤ **K** ≤ 109
- 1 ≤ **x**i ≤ 109
- **x**i ≠ **x**j for i ≠ j

### Subtasks

- Subtask #1 (25 points) 2 ≤ **H** ≤ 10
- Subtask #2 (20 points) **K** = 109
- Subtask #3 (55 points) Original constraints

### Example

<pre><b>Input:</b>
3
2 10
70 78 67 75
3 10
18 2 19 21 33 40 26 25
2 7
4 9 8 16

<b>Output:</b>
2
4
-1
</pre>
### Explanation

**Test case 1.** We are given **H** = 2 so there are N = 4 bears in the tournament. Limak has strength 70 and he first fights against a bear with strength 78. Limak must bribe this referee because he would lose otherwise. In the other match of the first stage, bears with strengths 67 and 75 fight with each other. Limak can bribe the referee of that match too, so that the bear with strength 67 advances to the next stage, where Limak beats him without bribing the referee (because Limak's strength is greater). The answer is 2 because Limak changes results of 2 matches, and you can verify that this is the minimum.

One other optimal strategy is to allow the bear with strength 75 to win his first match. Then Limak fights with that bear in the second stage and he can bribe the referee to win.

**Test case 2.** Limak must bribe at least 4 referees. The binary tree below shows how the tournament can look like. Each vertex with two children denotes one match (winner moves to the parent). Red vertices denote matches where Limak bribes the referee.

**Test case 3.** Limak can bribe the referee to win his first match (against the bear with strength 9) but he will lose the next match against the bear with strength 16 (who must win his first match) because the difference between their strength 16 - 4 = 12 is greater than **K**.
