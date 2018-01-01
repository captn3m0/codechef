---
category_name: easy
problem_code: DISHLIFE
problem_name: 'Dish Of Life'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 3-04-2017
tags:
    - admin2
    - april17
editorial_url: 'https://discuss.codechef.com/problems/DISHLIFE'
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1497284095
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/DISHLIFE.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/DISHLIFE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/DISHLIFE.pdf) as well.

Chef wants to serve mankind by making people immortal by preparing a dish, a dish of life - a dish with the best taste in the universe, one with the smell and splash of fresh water flowing down the springs of the mountain, one with the smell of the best lily flowers of the garden, one that has contained the very essence of life in a real sense.

This dish will contain **K** ingredients that are found only in remote islands amid mountains. For sake of convenience, we enumerate the ingredients by the integers from 1 to **K**, both inclusive. There are **N** islands and each of them offers some ingredients. Chef being a little child did not know how to collect the ingredients for the recipe. He went to all the islands and bought all the ingredients offered in each island. Could he possibly have saved some time by skipping some island? If it was not possible for Chef to collect the required ingredients (i.e. all the **K** ingredients), output "sad". If it was possible for him to skip some islands, output "some", otherwise output "all".

### Input

First line of the input contains an integer **T** denoting number of test cases. The description of **T** test cases follow.

The first line of each test case contains two space separated integers **N, K**.

The i-th of the next lines will contain first an integer **P**i, denoting the number of ingredients grown in the i-th island, followed by **P**i distinct integers in the range \[1, **K**\]. All the integers are space separated.

### Output

For each test case, output a single line containing one of the strings "sad", "all" or "some" (without quotes) according to the situation.

### Constraints

- 1 ≤ **T**  ≤ 10
- 1 ≤ **N, K** ≤ 105
- 1 ≤ **P**i ≤ **K**
- Sum of **P**i over all test cases ≤ 106

### Subtasks

**Subtask #1 (30 points)**

- 1 ≤ **N, K** ≤ 50

**Subtask #2 (30 points)**

- 1 ≤ **K** ≤ 50

**Subtask #3 (40 points)**

- original constraints

### Example

<pre>
<b>Input</b>
3
3 4
3 1 2 3
2 1 3
2 1 2
2 3
3 1 2 3
2 1 3
2 3
2 1 2
2 1 3

<b>Output</b>
sad
some
all


</pre>### Explanation
**Example 1**. The ingredient 4 is not available in any island, so Chef can't make the dish of life. Hence, the answer is "sad".

**Example 2**. Chef can just go to the first island and collect all the three ingredients required. He does not need to visit the second island. So, the answer is "some".

**Example 3**. Chef has to visit both the islands in order to obtain all the three ingredients. So, the answer is "all".
