---
category_name: easy
problem_code: DOWNLOAD
problem_name: 'Alien Chefs'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: flying_ant
problem_tester: laycurse
date_added: 11-06-2012
tags:
    - bit
    - cook23
    - flying_ant
    - medium
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/DOWNLOAD'
time:
    view_start_date: 1339959753
    submit_start_date: 1339959753
    visible_start_date: 1339959300
    end_date: 1735669800
    current: 1493558139
layout: problem
---
All submissions for this problem are available.The aliens living in outer space are very advanced in technology, intelligence and everything, except one, and that is Cooking. Each year they spend millions of dollars in research, to crack famous recipes prepared by humans.

Recently they came to know about Khana-Academy, a non-profit organization streaming free cooking lesson videos on earth. There are **N** recipes, numbered 1 to **N**, and the video of the *i*th recipe is live in the time interval \[**S***i*, **E***i*\]. An alien can visit earth but can not survive for more than just a small moment (earth is so advanced in pollution). An alien visits the earth at an integer time **t** and instantly downloads the complete video of all the lessons that are live at that moment of time **t** and leaves earth immediately. You are given the visiting times of a small group of **K** aliens. Find the number of different recipes aliens can learn by watching the downloaded videos. Not just one group of aliens, there are **Q** such groups, so you have to find the answer for each of these **Q** groups.

### Input

The first line has an integer **N**. Each of the following **N** lines has two integers **S***i* **E***i*. The next line has an integer **Q**, the number of groups. Each of the following **Q** lines has information of a group of aliens. The first integer is **K**, the number of aliens in that group, followed by **K** integers in the same line, the integer visiting times **t** of the aliens.

1 ≤ **N** ≤ 100000 (105)
1 ≤ **Q** ≤ 5000 (5 · 103)
1 ≤ **K** ≤ 20
1 ≤ **S***i*, **E***i*, **t** ≤ 1000000000 (109)
**S***i* < **E***i*

### Output

For each of the **Q** groups, output the number of different recipes that group of aliens can learn by watching the downloaded videos.

### Example

<pre>
<b>Input:</b>
4
1 4
3 10
2 6
5 8
3
1 5
2 2 6
3 1 10 9

<b>Output:</b>
3
4
2
</pre>

**Explanation:**
Given videos of 4 recipes in the following closed intervals.
1. \[ 1 , 4 \]
2. \[ 3 , 10 \]
3. \[ 2 , 6 \]
4. \[ 5 , 8 \]

In the first query, only one alien arrives at t = 5 and can download 3 recipes 2, 3, 4.

In the second query, two aliens arrive at t = 2 and 6. They can learn all the 4 recipes.

In the third query, three aliens arrive at t = 1, 10 and 9. They can learn only two recipes, 1 and 2.
