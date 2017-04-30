---
category_name: easy
problem_code: CHEFFILT
problem_name: 'Chef and Filters'
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
problem_author: berezin
problem_tester: xcwgf666
date_added: 8-10-2015
tags:
    - berezin
    - dec15
    - dynamic
    - easy
editorial_url: 'http://discuss.codechef.com/problems/CHEFFILT'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/CHEFFILT.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/CHEFFILT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/CHEFFILT.pdf) as well.

Nobody outside the cooking community knows that Chef is a big fan of Chefgram™ — a social network where chefs and cooks upload their secret kitchen photos. Recently Chef clicked a _beautiful_ photo, which is represented using **10** pixels in a single row. Respecting Chefgram™'s boolean roots, every pixel is either white or black.

Chefgram™ has **N** filters. Every filter is a string containing **10** symbols. Every symbol is either **'+'** or **'-'**.

- A **'+'** at the **ith** position in a filter means that if Chef applies this filter to his photo, the **ith** pixel will be **inverted**: it becomes black if it was originally white, and vice versa.
- A **'-'** at the **ith** position in a filter string means that if Chef applies this filter to his photo, the **ith** pixel will remain **unchanged**.

Chef can apply as many filters as he wants from a list. He can pick any subset of filters and consequently apply them to a photo.

For example:

- Imagine that Chef has a photo **"bbwwbbwwbb"** (where **'b'** stands for black and **'w'** stands for white).
- He applies filters **"++--++--++"**, **"-+-+-+-+-+"**.
- Applying the first filter will transform his picture to **"wwwwwwwwww"**.
- Applying the second filter on the transformed picture will give Chef the picture **"wbwbwbwbwb"**.

**Even if Chefgram™ has two or more identical filters, they are still considered different!**

Chef is extremely interested in knowing how many **different subsets** of all the Chefgram™ filters can he apply to transform his photo into **10 black pixels**?

### Input

- The first line of input contains a single integer **T** — the number of test cases.
- First line of each test case contains a string **S**. Each symbol is either **'b'** or **'w'**. This is Chef's photo.
- Second line of each test case contains a single integer **N** — the number of Chefgram™ filters.
- Each of the next **N** lines contains a single string **Fi**, each symbol of which is either **'+'** or **'-'**. This string is the **ith** Chefgram™ filter.

### Output

- For each test case, output a single line containing a single integer — answer to Chef's question modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **5**
- **|S|** = **10**
- **1** ≤ **N** ≤ **10^5**
- **|Fi|** = **10**

### Subtasks

- Subtask **1**: **T** ≤ **5**; **N** ≤ **20**; Points: **20**
- Subtask **2**: **T** ≤ **5**; **N** ≤ **10^3**; Points: **30**
- Subtask **3**: **T** ≤ **5**; **N** ≤ **10^5**; Points: **50**

### Example

```
<b>Input:</b>
3
wwwwwwwwww
3
+-+-+-+-+-
----------
+---------
wbwbwbwbwb
3
+-+-+-+-+-
+-+-------
----+-+-+-
bbbbbbbbbb
2
----------
----------

<b>Output:</b>
0
2
4

```
### Explanation

**Example case 1.** There is no filter or combination of filters transforming the picture to whole black.

**Example case 2.** Chef can either apply the first filter (and invert all whites) or apply the second and third filters in any order.

**Example case 3.** Picture is already fully black, and we have two **different** identity filters. Chef can either apply the **empty** subset of filters, the first filter only, the second filter only, or both.