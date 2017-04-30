---
category_name: medium
problem_code: HBIRD
problem_name: 'Chef And Hungry Birds'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: furko
date_added: 25-04-2015
tags:
    - binary
    - dynamic
    - easy
    - ma5termind
    - march16
editorial_url: 'http://discuss.codechef.com/problems/HBIRD'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493557686
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/HBIRD.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/HBIRD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/HBIRD.pdf) as well.

Chef loves to listen bird's chirping. Now Chef is in his office and is missing the chirping of birds after getting bored with long hours of work. So, he wants to have some fun. He likes paper birds of special shape. Here is some examples of beautiful paper birds Chef likes. ![](https://s3.amazonaws.com/codechef_shared/download/HBIRD2.PNG)

As we can see, the stomach of each bird is a **right angled isoceles triangle** (highlighted in the figures).

Today morning, Chef had bought a rectangular piece of paper of height **N** and width **M**. For e.g. consider following rectangular paper of height **N = 3** and width **M = 5**. ![](https://s3.amazonaws.com/codechef_shared/download/HBIRD3.png)

As you can see that, this is not an ordinary paper. This paper has some marked lines where each marked line joins two points available on the paper.

Now, Chef imagines creating birds for **each possible right isoceles triangle** whose sides are along the marked lines of the paper and its vertices are among the given points of the rectangular paper. See the sample test case for better understanding.

Each little bird has capacity to eat some grams of grain. Capacity of eating grains for a bird is defined by sum of hungriness of **all the points** included in triangle (including the corners of triangle) made by bird's stomach.

See the following images for some examples: ![](https://s3.amazonaws.com/codechef_shared/download/HBIRD1.png)

Now, Chef has **G** grams of grains at his house and wants to feed as many birds as possible. Can you help him in finding out the maximum number of birds he can feed?

### Input 

First line of input contains three space separated integers **N** , **M** and **Q** denoting the length, width of the paper and number of chef's questions. Next **N** lines of input contains **M** space separated integers where the **jth** integer in the **ith** line denotes the hungriness of that point i.e **Hi,j**. Next **Q** lines of input contains a single integer **G** denoting the grams of grain available to the chef.

### Output 

For each of the chef's question, Print the maximum number of birds he can feed.

### Constraints 

**1. 1 ≤ N ≤ 335** **1. 1 ≤ N \* M ≤ 112225** **1. 0 ≤ Hi,j ≤ 50** **1. 1 ≤ Q ≤ 105** **1. 0 ≤ G ≤ 109** 
### Subtask

- **Subtask 1 (20 pts):**
  - **1 ≤ N, M, Q ≤ 50**
  - 0 ≤ Hi,j ≤ 50
  - 0 ≤ G ≤ 109
- **Subtask 2 (80 pts):** Original Constraints

### Example

**Input**```

2 3 3
1 2 0
3 0 0
5
10
15


```
**Output**```

2
4
5

```
### Explanation

![](https://s3.amazonaws.com/hr-challenge-images/16094/1456949882-92fd6e6d3e-final.jpg "final.jpg")There are these 10 birds possible with their hungriness as follows:

```

(A) 4
(B) 6
(C) 3
(D) 5
(E) 5
(F) 2 
(G) 2
(H) 2
(I) 0
(J) 3

```
Note that bird **(I)** is not hungry and therefore we don't need to feed it. 31. With **5** grams of grains, we can only feed maximum of **2** birds say birds **(C)** and **(F)**.
32. With **10** grams of grains, we can only feed at maximum of **4** birds say birds **(C), (F), (G)** and **(H)**.