---
category_name: medium
problem_code: DEVSHOW
problem_name: 'Devu and survival task of a reality show'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 19-02-2015
tags:
    - admin2
    - snck151c
editorial_url: 'http://discuss.codechef.com/problems/DEVSHOW'
time:
    view_start_date: 1433700900
    submit_start_date: 1433700900
    visible_start_date: 1433700900
    end_date: 1735669800
    current: 1493557618
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151C/mandarin/DEVSHOW.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151C/russian/DEVSHOW.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151C/vietnamese/DEVSHOW.pdf)

Devu and his friend Amit got selected in a random television reality show. One of the task in the show was really interesting. The task was called "the survival" task. In the task, each person has to vote two person's names. One should not vote a single person twice. Also he/ she should not vote himself/ herself. After the voting, all the person having votes equal to highest and lowest votes are kicked out of the show. Naturally highest voted persons should go out of the show, but to maintain interestingness of the show, they also kick out lowest voted persons too.

Devu and Amit naturally don't want themselves to get kicked out of the show. Fortunately, voting of all other persons than Devu and Amit has already happened, so now Devu and Amit know choices of votes of all other persons. Assume that there are total **n** persons. You are guaranteed that **n** is greater than or equal to **3**. Devu has index **n - 1** and Amit has index **n**. The votes of all other persons that Devu and Amit are given to you by two arrays **firstVote** and **secondVote** each of size **n - 2**. Now Devu and Amit both want to design a strategy of voting after having discussion with each other. They want that as few of them (i.e. from Devu and Amit) gets out of the show. You have to tell in the best scenario, will both, one or none of them will remain in the show? Print a single line containing "both", "one" or "none" according to the situation. You also have to tell details of whom Devu and Amit will vote? If there are more than possible ways they can vote, print any of them.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- First line of the test case will contain a single integer **n** denoting total number of persons in the show.
- Second line contains **n - 2** space separated integers denoting the array **firstVote**, denoting the first votes of all other persons than Devu and Amit.
- Third line contains **n - 2** space separated integers denoting the array **secondVote** denoting the second votes of all other persons than Devu and Amit.

### Output

- For each test case, print three lines.
- First line should contain "both", "one" or "none" (without quotes) depending on how many out of Devu and Amit still remain in the show
- Second line should contain two space separated integers corresponding to the votes of Devu.
- Third line should contain two space separated integers corresponding to the votes of Amit.
 
### Constraints

- **1** ≤ **T** ≤ **105**
- **3 ≤ n ≤ 105**
- **1 ≤ firstVote\[i\], secondVote\[i\] ≤ n**
- For each **i (1 ≤ i ≤ n-2)**, **firstVote\[i\] != secondVote\[i\]**
- For each **i (1 ≤ i ≤ n-2)**, **firstVote\[i\] != i**
- For each **i (1 ≤ i ≤ n-2)**, **secondVote\[i\] != i**
- Sum of **n** over all the test cases will be less than or equal to **106**

### Example

<pre><b>Input:</b>
2
3
2
3
5
2 1 1
4 5 2

<b>Output:</b>
none
3 1
2 1
both
3 5
2 4


</pre>### Explanation
**Example case 1.** There is exactly one way of voting for Devu and Amit. So after the voting, all the persons will have equal votes. So they all will be kicked out of the show. So as Devu and Amit both are kicked out, print "none" in first line. In second line, print votes of Devu(index 2) and in third line print votes of Amit.

**Example case 2.** Devu and Amit can plan to save both of them. Devu will vote to 3rd person and Amit. Amit will vote 2nd person and Devu. In this way, 1st person will have highest 3 votes and 2nd person will have 2 votes, where as the 3rd person will have 0 votes. Devu and Amit both will have 2-2 votes each. So 1st and 3rd both persons will get kicked out of the show. Both Devu and Amit will survive :)
