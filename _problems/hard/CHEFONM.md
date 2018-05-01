---
category_name: hard
problem_code: CHEFONM
problem_name: 'Chef and Sort'
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
problem_author: mgch
problem_tester: karanaggarwal
date_added: 10-07-2016
tags:
    - cook72
    - expected
    - gauss
    - hard
    - mgch
    - permutation
    - probability
editorial_url: 'http://discuss.codechef.com/problems/CHEFONM'
time:
    view_start_date: 1469385000
    submit_start_date: 1469385000
    visible_start_date: 1469385000
    end_date: 1735669800
    current: 1493556633
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK72/mandarin/CHEFONM.pdf), [Russian](http://www.codechef.com/download/translated/COOK72/russian/CHEFONM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFONM.pdf) as well.

Chef has permutation **P** consisting of first **N** numbers, (i.e. from 1 to **N**). He wants to sort it, but he doesn't know any type of sort, except[Bogosort](https://en.wikipedia.org/wiki/Bogosort) . Chef is afraid that Bogosort might take a lot of time, so he optimized that algorithm and called it Chefsort. But he doesn't know expected time complexity of this algorithm. Formally, he wants to find expected value of findSwaps function. Please help him to find it. Below is the pseudo code of Chefsort.


<pre>
function findSwaps(permutation P) {
	swaps = 0;
	WHILE (not sorted P) {
		(i, j) = random pair (1 <= i < j <= n)
		SWAP(P[i], P[j])
		swaps = swaps + 1;
	}
	return swaps;
}

</pre>### Input

First line of the input contains one integer **T**, denoting number of tests. **T** test case follow.

For each test case, first line contains one integer **N**, denoting number of elements in the permutation.

Second line contains **N** space separated integers denoting the permutation **P**

### Output

Output a single real number corresponding to expected number of swap operations in Chefsort. Answer will be correct if absolute error less than **10-2**.

### Constraints

- 1 ≤ **T** ≤ 100
- 2 ≤ **N** ≤ 10
- 1 ≤ **Pi** ≤ **N**

### Example

<pre><b>Input:</b>
4
2
2 1
3
2 1 3
4
2 3 4 1
6
2 5 1 3 4 6

<b>Output:</b>
1.0000000
5.0000000
27.5000000
781.0416667
</pre>