---
category_name: challenge
problem_code: FACTORIZ
problem_name: Factorisation
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.592705'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: xcwgf666
date_added: 7-09-2013
tags:
    - challenge
    - factorization
    - pollard
    - sept14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/FACTORIZ'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1525199662
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT14/mandarin/FACTORIZ.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/FACTORIZ.pdf).

The statement of this problem is as easy as never before.
You are given an integer **N**, you need to find **M** positive integers **A1, A2, A3, ..., AM**, so that **A1\*A2\*A3\*...\*AM** would be equal to **N**. You should maximize the number **M**.

### Input

The first line of the input contains the integer **T**, denoting the number of the test cases.

Then **T** lines follow, each one is describing a single test case and contains a single positive integer **N**.

### Output

For each test case, output the integer **M** on the first line of the testcases' output. Then, output **M** lines, where the **i**-th should contain the number **Ai**. **Ai** should be a positive integer, greater than **1**.

### Scoring

For each individual file, your score will be calculated as the sum of **M2** over all the test cases in this file. Your score for the problem is the average of individual testcases' files scores. The number of points you'll get in the ranklist will be equal to **YourScore/BestScore**, where **YourScore** is naturally your score and **BestScore** is the best score, gained so far in this problem.

Please note that the score you get during the competition is the score on the 20% of the test data. The score on the complete test data will be available after the contest.

### Constraints

13. **1** ≤ **T** ≤ **100**
14. **1** ≤ **N** ≤ **101000**
### Test cases generation

Each of **10** official test cases will have **T = 100**. Inside each test file, the cases will be divided in the following **4** groups:

17. **2** ≤ **N** ≤ **1018**, **N** is picked randomly and uniformly - 10% of all test data
18. **2** ≤ **N** ≤ **1018**, **N** is picked not randomly - 15% of all test data
19. **2** ≤ **N** ≤ **101000**, the length of **N** is chosen randomly. All the digits are generated randomly - 50% of all test data.
20. **2** ≤ **N** ≤ **101000**, all the prime divisors of **N** don't exceed **1018** - 25% of the test data.
### Example

<pre><b>Input:</b>
4
100
111
1000
48598496894

<b>Output:</b>
2
10
10
2
37
3
2
10
100
1
48598496894

</pre>