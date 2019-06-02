---
category_name: easy
problem_code: CHEFGP
problem_name: 'Chef and a great voluntary Program'
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
    - COB
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
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: alex_2oo8
date_added: 6-10-2014
tags:
    - berezin
    - easy
    - greedy
    - oct17
editorial_url: 'https://discuss.codechef.com/problems/CHEFGP'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514816303
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/CHEFGP.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/CHEFGP.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/CHEFGP.pdf) as well.

Chef likes to eat apples and bananas a lot. Today, he is doing a voluntary service by providing these fruits to needy people in a lunger (a gathering of needy people). The people form a queue to collect fruits from Chef. Chef distributes each person one of the fruits either an apple or a banana.

You are given information about the way Chef distributed fruits to the people by a string **s**, whose each character is either 'a' or 'b' denoting whether the corresponding person was distributed an apple or a banana.

After the event Chef wants to analyze what he could have done to make the event memorable. The event will be memorable if everyone at the end is happy. Whenever a person in the queue get an apple or a banana then he will observe the most recent **K** fruits distributed (including fruits he previously took, but not counting the fruit he just got) and if all of them were same as the fruit he just got, then he becomes disgruntled.

The value of **K** if the person is getting an apple is **x**, and similarly **y** for banana.

To make all the people happy, Chef can change the order of distributing the fruits (apple and bananas) and also can give some people extra kiwi fruits. Since the kiwis are costly, Chef would want to minimize the number of kiwis he needed to distribute. Note that a person leaves the queue as soon as Chef distributes him either an apple or a banana. So Chef should provide a person some kiwis before providing an apple or a banana, otherwise Chef won't be able to provide him kiwi as they would have already left the queue.

Help Chef in finding a way of distributing the fruits to the people that make everyone happy and requires Chef to buy as few kiwis as possible.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains the string **s**.

The second line contains two space separated integers **x, y**.

### Output

For each test case, output a single string corresponding to the way in which the fruits should be distributed to the people. Apple fruit is denoted by 'a', banana by 'b', and kiwi by '\*'. If there are more than one possible solutions, you can print any. Note that the number of apples in the output should be equal to the number of apples in the initial distributions of fruits denoted by string **s**. Same goes for bananas.

### Constraints

- **1 ≤ T ≤ 50**
- **1 ≤ |s| ≤ 105**
- **1 ≤ x, y ≤ |s|**

### Subtasks

- **Subtask #1 (20 points)**: **x = y = 1**
- **Subtask #2 (30 points)**: **1 ≤ |s| ≤ 103**
- **Subtask #3 (50 points)**: Original constraints

### Example

<pre>
<b>Input</b>
6
ab
1 1
aab
1 1
aabb
1 2
aaaaab
2 1
aaaa
1 3
aaaaa
2 2
<b>Output</b>
ab
aba
abba
aa*abaa
a*a*a*a
aa*aa*a
</pre>
### Explanation

**Example 1**. The way of distributing fruits already makes everyone happy.

**Example 2**. The second person will be disgruntled as he receives apple same as the person ahead of him. One possible way of having good impression is to distribute in the order aba.

**Example 4**. It's impossible for the Chef to make everyone happy without buying extra kiwi fruits. Chef will buy one extra kiwi fruit. Now, he distributes aa\*abaa, i.e. apple to first and second, kiwi and apple to third, banana to fourth, and apples to fifth and sixth persons. This makes everyone happy. Notice that third person is happy because when he got an apple he checked the last 2 fruits taken which are the apple that the second person and the kiwi that he previously took, and they are not all apples so he is happy.

**Example 6**. at least two kiwis are needed here, if we gave the first one to third person and second one to fifth person then no one will be disgruntled, for example when the third person get an apple he will check the last two fruits distributed, they are one kiwi given to the same person previously and one apple given the second person so not all of them are apples, so it's fine with him.
