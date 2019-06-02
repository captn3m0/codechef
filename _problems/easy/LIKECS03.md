---
category_name: easy
problem_code: LIKECS03
problem_name: 'Infinite OR Game'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: likecs
problem_tester: kingofnumbers
date_added: 8-09-2017
tags:
    - bitwise
    - cook86
    - easy
    - greedy
    - likecs
    - likecs
editorial_url: 'https://discuss.codechef.com/problems/LIKECS03'
time:
    view_start_date: 1505673000
    submit_start_date: 1505673000
    visible_start_date: 1505673000
    end_date: 1735669800
    current: 1514816569
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS03.pdf), [Russian](http://www.codechef.com/download/translated/COOK86/russian/LIKECS03.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS03.pdf) as well.

Chef Tobby is trying to run a code given to him by Bhuvan for an experiment they want to include in the manuscript to be submitted to a conference. The deadline to submit the manuscript is within a couple of hours and Chef Tobby needs to finish the experiments before then.

The code given by Bhuvan is the following which runs given an array of **N** integers and another integer **K** :

`<pre>void recurse ( array a, int n ){	// n = size of array	define array b currently empty	consider all 2^n subsets of a[]	{		x = bitwise OR of elements in the subsets		add x into "b" if it is not present yet	}	if (sizeof( b ) == 1 </pre>`Chef Tobby tried to run an experiment with only one integer in the array with value 2 and K = 3. To his horror, he found out that the algorithm is resulting in an infinite loop. He is livid with the possibility that the algorithm can lead to infinite loops for certain cases. On closer inspection he determines that it might be possible to insert additional elements in the initial array to subvert the problem. Since time is very less, Chef Tobby would like to insert the minimum number of elements.

Chef Tobby has to finish writing the paper, so he asks his graduate student Leamas to fix it. Leamas has no idea how to fix the problem so he asks you for help.

### Input section

The first line contains **T**, the number of test cases.

Each test case consists of 2 lines. The first line contains **2** integers **N** and **K**, denoting the number of elements in the array and parameter mentioned in problem statement.

Next line contains **N** space separated integers, denoting the elements of the array.

### Output section

Output the minimum number of elements that need to be inserted so that inifinite loop can be avoided.

### Input constraints

<pre>
1 ≤ T ≤ 10
1 ≤ Sum of N over all test cases ≤ 10<sup>5</sup>
1 ≤ K ≤ 20
0 ≤ A[i] ≤ 2<sup>K</sup>-1, where A[i] denotes the i<sup>th</sup> element of the array.
</pre>
### Sample Input - 1

<pre>
1
2 2
3 1
</pre>
### Sample Output - 1

<pre>
1
</pre>
### Explanation - 1

You can win the game by inserting the element **2** into the array.

### Sample Input - 2

<pre>
1
7 3
3 7 5 4 6 2 1
</pre>
### Sample Output - 2

<pre>
0
</pre>
### Explanation - 2

The initial array will result will terminate in the first step of algorithm only. Thus there is no need to insert any new element.
