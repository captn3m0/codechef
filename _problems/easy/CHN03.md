---
category_name: easy
problem_code: CHN03
problem_name: 'Animesh practices some programming contests'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 15-01-2016
tags:
    - acm15chn
    - admin2
    - dynamic
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.As you know, Malvika has created some **n** programming contests. Each of the contests has three problems, categorized as easy, medium and hard on difficulty level. For the **i**th contest, easy problem takes **TE\[i\]** hours and gives you **PE\[i\]** pleasure. Similarly, medium problem takes **TM\[i\]** hours, gives **PM\[i\]** pleasure, and a hard one has the values **TH\[i\]**, **PH\[i\]**.

Today, Animesh wanted to practice some of them. Animesh has a really bad habit of trying problems for only a few minutes and saying to Malvika "I am a noob, you are a pro. It's some weird shit I don't know. Please, tell me the solution, bro!" Having been irritated by this behaviour numerous times in the past, she granted him **K** special powers he can use before starting the practice session. By using a single power, Animesh can pick any two problems irrespective of their difficulty from two different contests and swap them.

Animesh has at max **time** hours before he gets frustrated by his noobness and ends the practice session. He wants to make the maximum use of it by getting as much pleasure out of this activity as possible. Animesh also gets bored with the contest themes fairly quickly, so he does not want to solve more than one problem from any contest. Can you help Animesh in estimating the maximum amount of pleasure he can achieve out of this activity?

### Input

- The first line of input contains a single integer **T** denoting number of test cases
- For each test case :
- The first line contains three space separated integers **n, k, time**.
- Each of the next **n** lines contain three space separated integers denoting **TE\[i\], TM\[i\], TH\[i\]**.
- Each of the next **n** lines contain three space separated integers denoting **PE\[i\], PM\[i\], PH\[i\]**.


### Output

- For each test case, output a single integer in a separate line corresponding to the answer of the problem.

### Constraints

- 1 ≤ **T** ≤ **10**
- 1 ≤ **n** ≤ **50**
- 0 ≤ **k** ≤ **n \* n**
- 1 ≤ **time** ≤ **50**
- 1 ≤ **TE\[i\], TM\[i\], TH\[i\]** ≤ **50**
- 1 ≤ **PE\[i\], PM\[i\], PH\[i\]** ≤ **100000**

### Example

<pre><b>Input:</b>
2
1 0 5
1 2 3
5 3 6
2 1 6
1 2 1
2 3 3
5 3 3
4 6 5

<b>Output:</b>
6
11
</pre>
### Explanation

**In the first example**, Malvika has prepared only one programming contest, its easy problem takes 1 hour and gives 5 units of pleasure. The medium one takes 2 hours and gives 3 units of pleasure whereas the same values for hard are 3 hours and 6 units of pleasure. Animesh has only 5 hours and can select at max one problems out of these to solve. The hard problem is the best candidate to choose for him, it will him give him 6 units of pleasure and take his 5 hours. So, the answer is 6.

**In the second example**, Malvika has prepared two programming contests.

- First programming contest: 
  - Easy problem — 1 hour and 5 units of pleasure.
  - Medium problem — 2 hours and 3 units of pleasure.
  - Hard problem — 1 hours and 3 units of pleasure.
- Second programming contest: 
  - Easy problem — 2 hours and 4 units of pleasure.
  - Medium problem — 3 hours and 6 units of pleasure.
  - Hard problem — 3 hours and 5 units of pleasure.

Animesh has 6 hours and can use at max one swapping power. He can select the easy problem of the first programming contest and the medium problem of the second one. It will take him 4 hours and give him 11 units of pleasure.
