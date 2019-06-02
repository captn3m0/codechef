---
category_name: hard
problem_code: WEASELSC
problem_name: 'Weasel finds Staircase'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: jingbo_adm
date_added: 13-08-2017
tags:
    - bciobanu
    - dynamic
    - med
    - persistent
    - sept17
editorial_url: 'https://discuss.codechef.com/problems/WEASELSC'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816035
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/WEASELSC.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/WEASELSC.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/WEASELSC.pdf) as well.

Weasel loves histograms. Weasel feels that he is very much out of shape and asks for Chef’s advice. Chef convinced Weasel that the only way to get back in shape is to work out. Weasel decides to follow Chef’s advice and has formulated the greatest workout plan - to reflect his love for histograms - in which he will go down the staircase every day. However, Weasel is not in the best shape, so, for starters, he can only go down at most **K** steps.

Formally, a staircase is a set of adjacent rectangles with at most **K** changes of height. These rectangles should have either increasing or decreasing heights. The rectangles should start from the bottom (see images in the explanation section for clarification), and the height of rectangle at **i**-th position shouldn't be more than **histogrami**.

For each of the **T** cases, you have to find the greatest area of a staircase that matches the above-mentioned restrictions.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases.

For each of the **T** cases, you will be given two integers **N**, denoting the number of elements of the histogram, and **K**, the maximum number of steps, on the first line.

For each of the **T** cases, you will be given **histogram** array on the second line.

### Output

For each test case you should print an integer, the maximum area of a staircase that satisfies Weasel's conditions.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **105**
- 0 ≤ **K** ≤ **50**
- The sum of **N** over all testcases does not exceed **105**.
- 0 ≤ **histogrami** ≤ **105**

### Subtasks

- **Subtask #1** (10 points): **K = 0**.
- **Subtask #2** (30 points): The sum of **N** over all testcases does not exceed **1,500**.
- **Subtask #3** (60 points): original constraints

### Example

<pre><b>Input:</b>
4
5 2
1 2 3 4 5
5 3
9 8 7 6 4
5 1
8 7 5 7 8
4 10
0 1 1 0

<b>Output:</b>
13
33
29
2
</pre>
### Explanation

The cells which form the staircase are colored with yellow. The discarded cells are colored with grey.

#### Case **1**:

The computed area is **1** + **2** × **2** + **4** × **2** = **13**. 
 There are **2** changes of height: we start with a height of **1**, we change to **2** and then we change to **4**.

![](https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_1.png)#### Case **2**:

The computed area is **9** + **7** × **2** + **6** + **4** = **33**.

 ![](https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_2.png)#### Case **3**:

The computed area is **7** × **2** + **5** × **3** = **29**.

 ![](https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_3_1.png)Here is another possible solution:

![](https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_3_2.png)#### Case **4**:

We take the second and the third cell. We have 0 changes in height. This is a viable solution because we can also have staircases with less than **K** changes.
