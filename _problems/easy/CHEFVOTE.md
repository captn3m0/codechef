---
category_name: easy
problem_code: CHEFVOTE
problem_name: 'Chefs and Voting for best friend'
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
problem_author: admin2
problem_tester: null
date_added: 20-05-2015
tags:
    - ad
    - admin2
    - digraph
    - graph
    - realization
    - snck151a
editorial_url: 'http://discuss.codechef.com/problems/CHEFVOTE'
time:
    view_start_date: 1432379700
    submit_start_date: 1432379700
    visible_start_date: 1432379700
    end_date: 1735669800
    current: 1493558125
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151A/mandarin/CHEFVOTE.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151A/russian/CHEFVOTE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151A/vietnamese/CHEFVOTE.pdf)

There are **n** chef's in Chefland. There is a festival in Chefland in which each chef is asked to vote a person as his best friend. Obviously, a person can't vote himself as his best friend. Note that the best friend relationship is not necessarily bi-directional, i.e. it might be possible that x is best friend of y, but y is not a best friend of x.

Devu was the election commissioner who conducted this voting. Unfortunately, he was sleeping during the voting time. So, he could not see the actual vote of each person, instead after the voting, he counted the number of votes of each person and found that number of votes of **i**-th person was equal to **ci**.

Now he is wondering whether this distribution of votes corresponds to some actual voting or some fraudulent voting has happened. If the current distribution of votes does not correspond to any real voting, print -1. Otherwise, print any one of the possible voting which might have lead to the current distribution. If there are more than one possible ways of voting leading to the current distribution, you can print any one of them.

### Input

- First line of the input contains a single integer **T** denoting number of test cases.
- First line of each test case, contains a single integer **n**.
- Second line of each test case, contains **n** space separated integers denoting array **c**.

### Output

For each test case, - If there is no real voting corresponding to given distribution of votes, print -1 in a single line.
- Otherwise, print **n** space separated integers denoting a possible voting leading to current distribution of votes. **i**-th integer should denote the index of the person (1 based indexing) whom **i**-th person has voted as his best friend.

### Constraints and Subtasks

- **1 ≤ T ≤ 500**
- **1 ≤ n ≤ 50**
- **0 ≤ ci ≤ n**

### Example

<pre><b>Input:</b>
3
3
1 1 1
3
3 0 0
3
2 2 0

<b>Output:</b>
2 3 1
-1
-1

</pre>### Explanation
**Example 1:** In this example, each person has received one vote. One possible example of real voting leading to this distribution is {2, 3, 1}. In this distribution, number of votes of all three persons are equal to 1. Also it is real voting because no person votes himself as his best friend. You can also output another possible distribution {3, 1, 2} too.

**Example 2:** There is no real voting corresponding to this voting distribution.

**Example 3:** There is no real voting corresponding to this voting distribution.
