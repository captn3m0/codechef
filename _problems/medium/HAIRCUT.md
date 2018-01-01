---
category_name: medium
problem_code: HAIRCUT
problem_name: 'Bear and Haircut'
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
problem_author: errichto
problem_tester: kingofnumbers
date_added: 22-03-2017
tags:
    - dynamic
    - errichto
    - ltime46
    - medium
editorial_url: 'https://discuss.codechef.com/problems/HAIRCUT'
time:
    view_start_date: 1490461200
    submit_start_date: 1490461200
    visible_start_date: 1490461200
    end_date: 1735669800
    current: 1493557686
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME46/mandarin/HAIRCUT.pdf), [Russian](http://www.codechef.com/download/translated/LTIME46/russian/HAIRCUT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME46/vietnamese/HAIRCUT.pdf) as well.

Bear Limak has just gotten his hair cut. Looking in a mirror, he realized that his fur looks so-so just after a haircut. After some thinking, he stated that he _looks good_ when his most recent haircut was between **A** and **B** days ago (inclusive). It's guaranteed that **A** ≥ 1, so Limak doesn't look good on a day of a haircut in particular (you can assume that he gets a haircut in the morning).

After his new realization, Limak decided to plan his haircuts. Today is the day 0, and he has just gotten a haircut. For each of the following days, starting from the day 1, he can decide whether to get a haircut or not. It's allowed to get a haircut many days in a row.

There will be **N** days that are important for Limak (because he's going to meet a girl he likes). The i-th of them is the day **t**i. Limak wants to look good on as many of those days as possible.

Please, find the maximum possible number of important days when Limak will look good.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains three integers **N**, **A** and **B**, denoting the number of important days and values describing when Limak looks good respectively.

The second line contains **N** distinct integers **t**1, **t**2, ..., **tN**, denoting important days. These values are sorted increasingly.

### Output

For each test case, output a single line containing one integer — the maximum possible number of important days when Limak will look good.

### Constraints

- 1 ≤ **T** ≤ 6
- 1 ≤ **N** ≤ 150,000
- 1 ≤ **A** ≤ **B** ≤ 109
- 1 ≤ **t**i ≤ 109
- **t**i ti+1

### Subtasks

- Subtask #1 (20 points): 1 ≤ **N**, **t**i, **A**, **B** ≤ 50
- Subtask #2 (20 points): 1 ≤ **N** ≤ 1000
- Subtask #3 (20 points): **A** = 1
- Subtask #4 (40 points): Original constraints.

### Example

<pre><b>Input:</b>
6
5 4 8
2 3 6 8 9
8 6 12
8 9 12 13 15 17 18 25
8 6 12
8 9 12 13 15 17 18 24
5 50000123 100000123
700000123 710000123 770000123 780000123 790000123
22 6 20
3 9 12 22 24 25 34 46 47 51 53 62 64 66 68 73 79 92 93 95 96 98
3 1 1000
1 17 1000

<b>Output:</b>
3
6
5
5
20
3

</pre>### Explanation
**Test case 1.**There are 5 important days. Since Limak had his hair cut on the day 0, he can just wait and he will look good on days 4 through 8 (during that time, the number of days from the most recent haircut will be between **A** and **B**). There are 2 important days (6 and 8) in that interval. There exists a strategy that allows Limak to look good on 3 important days. For example, he could get a new haircut on the day 1 — then he will look good on days 5 through 9, including 3 important days. It turns out that it's impossible that Limak would look good on 4 or more important days. So the answer is 3.

**Test case 2.**Limak should get a haircut on the day 6, to look good on days 12 through 18. Then he should get a haircut on the day 19, to look good on days 25 through 31. In total, he will look good on 6 important days: 12, 13, 15, 17, 18, 25.
