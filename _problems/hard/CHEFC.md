---
category_name: hard
problem_code: CHEFC
problem_name: 'Chef and medium problem '
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: furko
problem_tester: stzgd
date_added: 17-09-2014
tags:
    - furko
    - hard
    - ltime16
    - substring
    - treaps
editorial_url: 'http://discuss.codechef.com/problems/CHEFC'
time:
    view_start_date: 1411893000
    submit_start_date: 1411893000
    visible_start_date: 1411893000
    end_date: 1735669800
    current: 1493556634
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFC.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME16/russian/CHEFC.pdf).

Chef has an array. The size of the array is equal to **N**.
Chef wants to make **M** queries. Each query has one of the two types:

- **1 l r** - Calculate some interesting function **F** for subarray indexed from **l** to **r** inclusive.
- **2 l r** - Modify the given array by removing all elements having indices in range from **l** to **r** and then putting these numbers at the beginning of
    array. Order of all other elements remains same.

For example: you have array \[1, 2, 3, 4, 5, 6, 7, 8\] and query (2 4 6), the modified array after the operation will look like \[4, 5, 6, 1, 2, 3, 7, 8\].
All queries that goes after this query have to be executed at new the array.

Now let us define the interesting function **F** :). 
Lets call this array **B**. Let **|B|** be the length of array **B**. Assume that **B** is having 1 based indexing.
Then the function **F** can be calculated by following code.

``

<pre>
X = 1;
for (i = 2; i <= |B|; i++)
    if (B[i] != B[i - 1])
        X++;
X is the output of the function F(B).
</pre>
### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of the elements in given array.

Next line contains **N** numbers denoting the elements of given array.

Third line contains a single integer **M** denoting the number of queries that Chef wants to execute.

Each of the next **M** lines describes a single query in the format given in the statement.

### Output

For each query of the first type output a single line containing a single integer - the answer for this query.

### Constraints

- 1 ≤ **T** ≤ 3
- 1 ≤ **Ai** ≤ 109
- 1 ≤ **l** ≤ **r** ≤ **N**
- Subtask 1 (15 points): 1 ≤ **N** ≤ 100, 1 ≤ **M** ≤ 1000
- Subtask 2 (25 points): 1 ≤ **N**, **M** ≤ 105, there is no query with type 2
- Subtask 3 (60 points): 1 ≤ **N**, **M** ≤ 105

### Example

<pre><b>Input:</b>
1
5
1 1 2 1 3
5
1 1 5
1 2 4
2 2 3
1 1 5
2 3 3

<b>Output:</b>
4
3
4
</pre>