---
category_name: medium
problem_code: RESTPERM
problem_name: 'Restore the Permutation'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: mgch
date_added: 5-10-2016
tags:
    - divide
    - ltime41
    - recursion
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/RESTPERM'
time:
    view_start_date: 1477760400
    submit_start_date: 1477760400
    visible_start_date: 1477760400
    end_date: 1735669800
    current: 1493557884
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME41/mandarin/RESTPERM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME41/russian/RESTPERM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME41/vietnamese/RESTPERM.pdf) as well.

Alex, Kostya, Andrew and Sergey have recently attended the famous Russian competitive programming camp.

One day, during the excursion they've became bored. Especially Sergey. So he asked Alex for some nice problem they can think about to dispel the boredom. And Alex told the following problem:

There is an **1**-indexed permutation **A** of the first **N** positive integers, which is not known. You can ask two following kinds of queries:

- **1 X Y D** : is it true that |**AX - AY**| is divisible by **D** without remainder?
- **2 X Y** : is it true that **AXY**

The task was to restore the permutation **A** by asking the queries of the following form. There are limits on the amount of queries of each type you can ask. Andrew and Kostya came up with the solution very quickly. But Sergey was really puzzled with this task. However, after thinking for some time, he came up with a solution too.

And then he figured out that he actually misheard the original problem that was a really easy one.

First Sergey got upset because of spending time for solving the non-existing problem, but then he realized that he can give this problem in a contest.

So he proposes to solve his version of the problem. :)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first (and only) line of each test case contains a single integer **N** denoting the number of numbers in the permutation.

### Output

For each test case, output **Q** lines.

On every of these **Q** output first the type of the query, then the parameters, separated with single spaces. There can be three possible query types: the first two with the same format from the statement and the following one:

- **3 A1 A2 ... AN** denoting the resulting permutation.

There should always be only one query of the third type per test case -- the last one. For the queries (types **1** and **2**) you output, you will receive a feedback. The judge program will output "Yes" or "No" (both without quotes), denoting the answer to the corresponding query.

In a test case, you can ask no more than **13 × N** queries of the first type and no more than **N-1** queries of the second type. It is guaranteed that it will be possible to restore the permutation under the given constraints.

Please flush output buffer anytime you output a query.

### Constraints

- **1 ≤** sum of **N ≤ 105**
- **1 ≤** **X, Y, D** ≤ **N**
- Subtask 1 (16 points): **1 ≤** **N ≤ 3**
- Subtask 2 (25 points): **1 ≤** **N ≤ 13**
- Subtask 3 (30 points): **1 ≤** **N ≤ 100**
- Subtask 4 (29 points): **1 ≤** **N ≤ 104**

### Example

```
<b>Input:</b>
<tt>2
2
2</tt>

<b>Output:</b>
<tt>2 1 2
> (FEEDBACK) No
3 2 1
2 1 2
> (FEEDBACK) Yes
3 1 2</tt>

```