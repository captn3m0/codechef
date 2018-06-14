---
category_name: challenge
problem_code: CHMKTRPS
problem_name: 'Chef and Making Triples'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: mgch
date_added: 2-08-2015
tags:
    - antoniuk1
    - challenge
    - greedy
    - jan16
editorial_url: 'http://discuss.codechef.com/problems/CHMKTRPS'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1525454416
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/CHMKTRPS.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/CHMKTRPS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/CHMKTRPS.pdf) as well.

Chef has an array **A** of 3 x **N** integers. He wants to make as many disjoint triples as possible (a triple is a set of three integers) from this array such that sum of elements in each triple is equal. Two triples **(A\[a\], A\[b\], A\[c\])** and **(A\[x\], A\[y\], A\[z\])** are considered disjoint iff the sets **{a, b, c}** and **{x, y, z}** are disjoint.

Please, help Chef achieve this task.

### Input

- The first line of each test file contains a single integer **N** indicating that the number of elements in the array **A** is 3 x **N**.
- The second line contains 3 × **N** space-separated integers **A1**, **A2**, … , **A3 x N**.

### Output

- Output two lines as described below.
- The first line should contain one integer **K** denoting the number of triples you found.
- In the second line you should print **K** triples of integers — **indices** of numbers in each triple.


### Scoring

Your score for each test case will be the number of triples you found. Your goal is to maximise this score.

Your total score for the problem will be the sum of scores on all the test cases.

Your solution will be tested only on 20% of the test files during the contest and will be rejudged against 100% after the end of competition.

You will get "Wrong Answer" verdict if some element of the array is repeated in your output (triples are not disjoint), or if there are two triples with different sum of elements (invalid triples). If you output only one triple, that's ok, you'll get a score of 1.

### Constraints

- **N** = **105**
- **-109** ≤ **Ai** ≤ **109**

### Example

<pre><b>Input:</b>
4
3 7 2 12 1 11 8 9 4 6 5 10

<b>Output:</b>
3
5 6 11 3 4 1 10 2 9
</pre>### Explanation

In this example we made three triples: (**A5**, **A6**, **A11**) = (1, 11, 5), (**A3**, **A4**, **A1**) = (2, 12, 3) and (**A10**, **A2**, **A9**) = (6, 7, 4). As you can see, 1 + 11 + 5 = 2 + 12 + 3 = 6 + 7 + 4 = 17. So, this output is correct because the sum of numbers in each triple is equal to the same number and there is no element of array that occurs more than once in triples. Score for this testcase will be 3 because you found three triples. Note that this test case can't be in the official test data because **N** doesn't equal 105.

### Test data generation

There will be two types of test files.

- Type #1: We manually choose numbers **lo** and **hi**. **N** will be equal **105**. Each element of an array will be randomly chosen from interval \[**lo**..**hi**\].
- Type #2: We manually choose the number **S**, **lo** and **hi**. **N** will be equal **105**. Then we generate **N** random triples with sum of elements equal to **S** and each element from \[**lo** … **hi**\] , add all those elements to the array and shuffle it.

There will be 10 test files of type #1 and 10 test files of type #2. In each test file we can manually change one element (to prevent recognizing type of test file by sum of numbers in it). During the contest, your solutions will be tested on two tests of the first type and two tests of the second type.

Also you can assume that:

- In 20% of test data: **hi**-**lo** ≤ **2 \* 103**
- In 30% of test data: **hi**-**lo** ≤ **2 \* 105**
- In 60% of test data: **hi**-**lo** ≤ **2 \* 107**
- In 100% of test data: **hi**-**lo** ≤ **2 \* 109**
