---
category_name: school
problem_code: COOMILK
problem_name: 'Bear and Milky Cookies'
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
problem_tester: errichto
date_added: 22-02-2017
tags:
    - cakewalk
    - errichto
    - ltime45
editorial_url: 'https://discuss.codechef.com/problems/COOMILK'
time:
    view_start_date: 1488042300
    submit_start_date: 1488042300
    visible_start_date: 1488042300
    end_date: 1735669800
    current: 1492506707
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME45/mandarin/COOMILK.pdf), [Russian](http://www.codechef.com/download/translated/LTIME45/russian/COOMILK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME45/vietnamese/COOMILK.pdf) as well.

Limak is a little polar bear, who loves eating cookies and drinking milk. For this reason he often visits Chef's kitchen.

Limak is going to spend **N** minutes in the kitchen. Each minute he either eats a cookie or drinks milk. Cookies are very sweet and thus Limak's parents have instructed him, that after eating a cookie, he has to drink milk in the next minute.

You are given whether he ate a cookie or drank milk in each of the **N** minutes. Your task is to check if Limak followed his parents' instructions. That is, you need to verify whether after each eaten cookie he drinks milk in the next minute. Print "YES" or "NO" for each test case accordingly.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N** denoting the number of minutes.

The second line of a test case contains **N** space-separated strings **S**1, **S**2, ..., **SN**. The string **S**i is either "cookie" (if Limak eats a cookie in the i-th minute) or "milk" (otherwise).

### Output

For each test case, output a single line containing the answer — "YES" if Limak followed his parents' instructions, and "NO" otherwise, both without the quotes.

### Constraints

- 1 ≤ **T** ≤ 50
- 1 ≤ **N** ≤ 50
- Each **S**i is either "cookie" or "milk" (without the quotes).

### Subtasks

- Subtask #1 (40 points) **N** = 2
- Subtask #2 (60 points) Original constraints

### Example

<pre><b>Input:</b>
4
7
cookie milk milk cookie milk cookie milk
5
cookie cookie milk milk milk
4
milk milk milk milk
1
cookie

<b>Output:</b>
YES
NO
YES
NO
</pre>### Explanation
**Test case 1.** Limak is in the kitchen for 7 minutes. He eats three cookies and after each of them he indeed drinks milk in the next minute. The answer is "YES".

**Test case 2.** Limak is in the kitchen for 5 minutes. In the first minute he eats a cookie and in the second minute he eats a cookie again, instead of drinking milk. The answer is "NO".

**Test case 3.** Here Limak doesn't eat any cookies. The answer is "YES" because the condition is satisfied (there is no situation when Limak eats a cookie but doesn't drink milk in the next minute).

**Test case 4.** Limak eats a cookie and doesn't drink milk in the next minute so the answer is "NO".
