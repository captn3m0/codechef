---
category_name: school
problem_code: SIMPSTAT
problem_name: 'Simple Statistics'
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
problem_author: xcwgf666
problem_tester: zedthirtyeight
date_added: 21-02-2016
tags:
    - cakewalk
    - ltime34
    - sorting
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SIMPSTAT'
time:
    view_start_date: 1459011600
    submit_start_date: 1459011600
    visible_start_date: 1459011600
    end_date: 1735669800
    current: 1492506750
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME33/mandarin/SIMPSTAT.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/SIMPSTAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/SIMPSTAT.pdf) as well.

Sergey has made **N** measurements. Now, he wants to know the average value of the measurements made.

In order to make the average value a better representative of the measurements, before calculating the average, he wants first to remove the highest **K** and the lowest **K** measurements. After that, he will calculate the average value among the remaining **N - 2K** measurements.

Could you help Sergey to find the average value he will get after these manipulations?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integers **N** and **K** denoting the number of measurements and the number of the greatest and the lowest values that will be removed.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the measurements.

### Output

For each test case, output a single line containing the average value after removing **K** lowest and **K** greatest measurements.

Your answer will be considered correct, in case it has absolute or relative error, not exceeding **10-6**.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **104**
- 0 ≤ **2K** N
- **-106** ≤ **Ai** ≤ **106**

### Subtasks

- Subtask #1 (50 points): **K = 0**
- Subtask #2 (50 points): **no additional constraints**

### Example

<pre><b>Input:</b>
3
5 1
2 9 -10 25 1
5 0
2 9 -10 25 1
3 1
1 1 1

<b>Output:</b>
4.000000
5.400000
1.000000
</pre>### Explanation

**Example case 1.** After removing **1** greatest and **1** lowest measurement, we get the set **{2, 9, 1}**. The average value in this set is **(2+9+1)/3=4**.

**Example case 2.** The average value in the set **{2, 9, -10, 25, 1}** is **(2+9-10+25+1)/5=5.4**.

**Example case 3.** After removing the **1** largest and smallest measurements, Sergey will be left with only one measurement, i.e. **1**. Average of this is **1** itself.
