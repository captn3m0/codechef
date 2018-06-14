---
category_name: easy
problem_code: FAKEBS
problem_name: 'Fake Binary Search'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: abdullah768
problem_tester: null
date_added: 25-04-2018
tags:
    - abdullah768
    - binary
    - may18
editorial_url: 'https://discuss.codechef.com/problems/FAKEBS'
time:
    view_start_date: 1526290200
    submit_start_date: 1526290200
    visible_start_date: 1526290200
    end_date: 1735669800
    current: 1528987025
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MAY18/mandarin/FAKEBS.pdf), [Russian](http://www.codechef.com/download/translated/MAY18/russian/FAKEBS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY18/vietnamese/FAKEBS.pdf) as well.

"If you didn't copy assignments during your engineering course, did you even do engineering?" There are $Q$ students in Chef's class. Chef's teacher has given the students a simple assignment: Write a function that takes as arguments an array $A$ containing only unique elements and a number $X$ guaranteed to be present in the array and returns the ($1$-based) index of the element that is equal to $X$. The teacher was expecting a linear search algorithm, but since Chef is such an amazing programmer, he decided to write the following binary search function: ``` integer binary\_search(array a, integer n, integer x): integer low, high, mid low := 1 high := n while low ≤ high: mid := (low + high) / 2 if a\[mid\] == x: break else if a\[mid\] is less than x: low := mid+1 else: high := mid-1 return mid ``` All of Chef's classmates have copied his code and submitted it to the teacher. Chef later realised that since he forgot to sort the array, the binary search algorithm may not work. Luckily, the teacher is tired today, so she asked Chef to assist her with grading the codes. Each student's code is graded by providing an array $A$ and an integer $X$ to it and checking if the returned index is correct. However, the teacher is lazy and provides the exact same array to all codes. The only thing that varies is the value of $X$. Chef was asked to type in the inputs. He decides that when typing in the input array for each code, he's not going to use the input array he's given, but an array created by swapping some pairs of elements of this original input array. However, he cannot change the position of the element that's equal to $X$ itself, since that would be suspicious. For each of the $Q$ students, Chef would like to know the minimum number of swaps required to make the algorithm find the correct answer. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $Q$ denoting the number of elements in the array and the number of students. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The following $Q$ lines describe queries. Each of these lines contains a single integer $X$. ### Output For each query, print a single line containing one integer — the minimum required number of swaps, or $-1$ if it is impossible to make the algorithm find the correct answer. (Do you really think Chef can fail?) ### Constraints - $1 \\le T \\le 10$ - $1 \\le N, Q \\le 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - $1 \\le X \\le 10^9$ - all elements of $A$ are pairwise distinct - for each query, $X$ is present in $A$ - sum of $N$ over all test cases $\\le 5\\cdot10^5$ - sum of $Q$ over all test cases $\\le 5\\cdot10^5$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le N \\le 10$ \*\*Subtask #2 (30 points):\*\* - $1 \\le A\_i \\le 10^6$ for each valid $i$ - $1 \\le X \\le 10^6$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 1 7 7 3 1 6 7 2 5 4 1 2 3 4 5 6 7 ``` ### Example Output ``` 0 1 1 2 1 0 0 ``` ### Explanation \*\*Example case 1:\*\* - Query 1: The algorithm works without any swaps. - Query 2: One solution is to swap $A\_2$ and $A\_4$. - Query 3: One solution is to swap $A\_2$ and $A\_6$. - Query 4: One solution is to swap $A\_2$ with $A\_4$ and $A\_5$ with $A\_6$. - Query 5: One solution is to swap $A\_2$ and $A\_4$. - Query 6: The algorithm works without any swaps. - Query 7: The algorithm works without any swaps.
