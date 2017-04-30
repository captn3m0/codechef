---
category_name: school
problem_code: BOOKCHEF
problem_name: 'ChefWatson uses Social Network'
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
problem_author: darkshadows
problem_tester: null
date_added: 4-10-2016
tags:
    - cakewalk
    - cook75
    - darkshadows
    - sorting
time:
    view_start_date: 1477247400
    submit_start_date: 1477247400
    visible_start_date: 1477247400
    end_date: 1735669800
    current: 1492506707
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK75/mandarin/BOOKCHEF.pdf), [Russian](http://www.codechef.com/download/translated/COOK75/russian/BOOKCHEF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK75/vietnamese/BOOKCHEF.pdf) as well.

Chef Watson uses a social network called ChefBook, which has a new feed consisting of posts by his friends. Each post can be characterized by **f** - the identifier of the friend who created the post, **p** - the popularity of the post(which is pre-calculated by ChefBook platform using some machine learning algorithm) and **s** - the contents of the post which is a string of lower and uppercase English alphabets.

Also, Chef has some friends, which he has marked as _special_.

The algorithm used by ChefBook for determining the order of posts in news feed is as follows:

- Posts of _special_ friends should be shown first, irrespective of popularity. Among all such posts the popular ones should be shown earlier.
- Among all other posts, popular posts should be shown earlier.

Given, a list of identifiers of Chef's _special_ friends and a list of posts, you have to implement this algorithm for engineers of ChefBook and output the correct ordering of posts in the new feed.

### Input

First line contains **N**, number of _special_ friends of Chef and **M**, the number of posts. Next line contains **N** integers **A1, A2, ..., AN** denoting the identifiers of _special_ friends of Chef. Each of the next **M** lines contains a pair of integers and a string denoting **f**, **p** and **s**, identifier of the friend who created the post, the popularity of the post and the contents of the post, respectively. It is guaranteed that no two posts have same popularity.

### Output

Output correct ordering of posts in news feed in **M** lines. Output only the contents of a post.

### Constraints

- **1** ≤ **N, M** ≤ **103**
- **1** ≤ **Ai, f, p** ≤ **105**
- **1** ≤ **length(s)** ≤ **100**

### Example

```
<b>Input:</b>
2 4
1 2
1 1 WhoDoesntLoveChefBook
2 2 WinterIsComing
3 10 TheseViolentDelightsHaveViolentEnds
4 3 ComeAtTheKingBestNotMiss

<b>Output:</b>
WinterIsComing
WhoDoesntLoveChefBook
TheseViolentDelightsHaveViolentEnds
ComeAtTheKingBestNotMiss


```
### Explanation

First we should show posts created by friends with identifiers **1** and **2**. Among the posts by these friends, the one with more popularity should be shown first.
Among remaining posts, we show those which are more popular first.