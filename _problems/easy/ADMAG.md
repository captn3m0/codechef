---
category_name: easy
problem_code: ADMAG
problem_name: 'Aditi and Magic Trick'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: abhra73
problem_tester: laycurse
date_added: 29-06-2015
tags:
    - abhra73
    - aug15
    - fibonacci
    - simple
    - zeckendorf
editorial_url: 'http://discuss.codechef.com/problems/ADMAG'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493558104
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG15/mandarin/ADMAG.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/ADMAG.pdf).

Aditi recently discovered a new magic trick. First, she gives you an integer **N** and asks you to think an integer between **1** and **N**. Then she gives you a bundle of cards each having a sorted list (in ascending order) of some distinct integers written on it. The integers in all the lists are between **1** and **N**. Note that the same integer may appear in more than one card. Now, she shows you these cards one by one and asks whether the number you thought is written on the card or not. After that, she immediately tells you the integer you had thought of.

Seeing you thoroughly puzzled, she explains that she can apply the trick so fast because she is just adding the first integer written on the cards that contain the integer you had thought of, and then gives the sum as the answer. She calls a bundle _interesting_ if when the bundle is lexicographically sorted, no two consecutive cards have any number in common. Now she challenges you to find out the minimum number of cards she will need for making an _interesting_ bundle such that the magic trick will work every time.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- Each test case contains a line with a single integer **N**.

### Output

- For each test case, output a line containing a single integer denoting the minimum number of cards required.

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ N ≤ 1018**

### Sub tasks

- Subtask #1: **1 ≤ T ≤ 10, 1 ≤ N ≤ 10** (5 points)
- Subtask #2: **1 ≤ T ≤ 100, 1 ≤ N ≤ 1000** (10 points)
- Subtask #3: Original Constraints (85 points)

### Example

<pre><b>Input:</b>
2
1
4

<b>Output:</b>
1
3
</pre>### Explanation

- **In example 1**, only **1** card containing **{1}** will work.
- **In example 2**, make **3** cards containing **{1,4}, {2}** and **{3,4}**. 
  - Assume you thought of **1**, then you will select the 1st card **{1,4}**, then she will correctly figure out the integer you thought being **1**.
  - Assume you thought of **2**, then you will select the 2nd card **{2}**, then she will correctly figure out the integer you thought being **2**.
  - Assume you thought of **3**, then you will select the 3rd card **{3,4}**, then she will correctly figure out the integer you thought being **3**.
  - Assume you thought of **4**, then you will select 1st card **{1,4}** and 3rd card **{3,4}**, then she will calculate the sum of the first integers of the two card **1 + 3 = 4**, and she will answer it.
  
  Thus her trick will work well in every case. And we can check it easily that the cards are sorted in [lexicographical order](https://en.wikipedia.org/wiki/Lexicographical_order) and two consecutive cards have no common integers.
