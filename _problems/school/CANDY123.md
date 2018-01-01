---
category_name: school
problem_code: CANDY123
problem_name: 'Bear and Candies 123'
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
problem_author: errichto
problem_tester: mnbvmar
date_added: 22-04-2017
tags:
    - cakewalk
    - cook81
    - errichto
editorial_url: 'https://discuss.codechef.com/problems/CANDY123'
time:
    view_start_date: 1492972200
    submit_start_date: 1492972200
    visible_start_date: 1492972200
    end_date: 1735669800
    current: 1497283935
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK81/mandarin/CANDY123.pdf), [Russian](http://www.codechef.com/download/translated/COOK81/russian/CANDY123.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK81/vietnamese/CANDY123.pdf) as well.

Bears love candies and games involving eating them. Limak and Bob play the following game. Limak eats 1 candy, then Bob eats 2 candies, then Limak eats 3 candies, then Bob eats 4 candies, and so on. Once someone can't eat what he is supposed to eat, he loses.

Limak can eat at most **A** candies in total (otherwise he would become sick), while Bob can eat at most **B** candies in total. Who will win the game? Print "Limak" or "Bob" accordingly.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains two integers **A** and **B** denoting the maximum possible number of candies Limak can eat and the maximum possible number of candies Bob can eat respectively.

### Output

For each test case, output a single line containing one string — the name of the winner ("Limak" or "Bob" without the quotes).

### Constraints

- 1 ≤ **T** ≤ 1000
- 1 ≤ **A, B** ≤ 1000

### Example

<pre><b>Input:</b>
10
3 2
4 2
1 1
1 2
1 3
9 3
9 11
9 12
9 1000
8 11

<b>Output:</b>
Bob
Limak
Limak
Bob
Bob
Limak
Limak
Bob
Bob
Bob

</pre>### Explanation
**Test case 1.** We have **A** = 3 and **B** = 2. Limak eats 1 candy first, and then Bob eats 2 candies. Then Limak is supposed to eat 3 candies but that would mean 1 + 3 = 4 candies in total. It's impossible because he can eat at most **A** candies, so he loses. Bob wins, and so we print "Bob".

**Test case 2.** Now we have **A** = 4 and **B** = 2. Limak eats 1 candy first, and then Bob eats 2 candies, then Limak eats 3 candies (he has 1 + 3 = 4 candies in total, which is allowed because it doesn't exceed **A**). Now Bob should eat 4 candies but he can't eat even a single one (he already ate 2 candies). Bob loses and Limak is the winner.

**Test case 8.** We have **A** = 9 and **B** = 12. The game looks as follows:

- Limak eats 1 candy.
- Bob eats 2 candies.
- Limak eats 3 candies (4 in total).
- Bob eats 4 candies (6 in total).
- Limak eats 5 candies (9 in total).
- Bob eats 6 candies (12 in total).
- Limak is supposed to eat 7 candies but he can't — that would exceed **A**. Bob wins.
