---
category_name: easy
problem_code: ANKPAREN
problem_name: 'Longest non regular parentheses sub-sequence'
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
problem_author: code_master01
problem_tester: rubanenko
date_added: 9-06-2015
tags:
    - basic
    - code_master01
    - cook59
    - easy
    - pattern
    - stack
editorial_url: 'http://discuss.codechef.com/problems/ANKPAREN'
time:
    view_start_date: 1434911400
    submit_start_date: 1434911400
    visible_start_date: 1434911400
    end_date: 1735669800
    current: 1493558106
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK59/mandarin/ANKPAREN.pdf) and [Russian](http://www.codechef.com/download/translated/COOK59/russian/ANKPAREN.pdf) as well.

Chef has recently learnt about sequences of parentheses. These are special sequences that contain only the characters _'('_ and _')'_.

A regular parentheses sequence follows the following definition:

- An empty sequence is regular
- If **S** is a regular sequence, then **(S)** is also regular
- If **A** and **B** represent two regular sequences, then their concatenation **AB** is also regular.

Therefore, the sequences **(), ()()** and **(())()** are regular, while **()(, )** and **))()** are non-regular.

Now, you need to find the longest subsequence of the given sequence which is non-regular. Amongst all such **distinct** answers, output the lexicographically **Kth** amongst them. If the number of distinct subsequences with maximum length is less than **K**, please output -1 instead.

### Input:

The first line contains a single integer **T**, denoting the number of test cases to follow.
Each of the test cases have exactly two lines, the first contains the parentheses sequence and the second contains the value of **K**.

### Output:

Output exactly **T** lines, each containing answer to the corresponding query.

### Constraints:

- 1 ≤ **T** ≤ 10
- 1 ≤ |**S**| ≤ 105
- 1 ≤ **K** ≤ 109

### Example:

**Sample Input:**

```

5
()
2
(()
1
(()
2
(())
2
(())
3


```
**Sample Output:**

```

)
(()
-1
())
-1


```
### Explanation:

**Case 1:**Following are the subsequences:

```

Length   Subsequence   Regular/Non-Regular

  1			(			Non-regular
  1			)			Non-regular
  2			()			Regular


```
There are two non-regular subsequences of equal length:'(' and ')'.
We are asked for the lexicographically 2nd, so output should be ')'.

**Case 2:**Following are the subsequences:

```

Length   Subsequence   Regular/Non-Regular
  1			(			Non-Regular
  1			)			Non-Regular
  2			((			Non-Regular
  2			()			Regular
  3			(()			Non-Regular


```
In this case, there are non-regular subsequences of lengths 1, 2, and 3. But, as 3 is the maximum among these, we choose, **(()**.

**Case 3:**
The string is same as Case 2, and we realize that there is only one subsequence of the maximum length 3, thus we must output -1.

**Case 4:**
We can find that following subsequences have maximum length and are non-regular.

```

Length 	Subsequence
  3			())	
  3			(()


```
In lexicographical order, we have following subsequences: \[ ((), ()) \]
The query asks for 2nd subsequence, thus the required output is ()).

**Case 5:**
This is the same sequence as last case, and we know that there are exactly 2 distinct subsequences of maximum length. Thus, answer should be -1.

### Notes:

- A subsequence of a given sequence **A** is a non-empty sequence obtained by removing zero or more characters from **A**. It does not need to be contiguous.
- A sequence **A** is called different from another sequence **B**, if there exists an integer **k**, such that 1 ≤ **k** ≤ **N** (**N**  is the length of both sequences), and **Ak != Bk.**
- Consider two different **N**-length sequences, **A** and **B**. Let **k** be the smallest integer such that **A\[k\] != B\[k\]** and 1 ≤ **k** ≤ **N**. If **A\[k\] , then **A** is said to be lexicographically smaller than **B**, and vice-versa.**