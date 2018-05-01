---
category_name: hard
problem_code: KOL16D
problem_name: 'Men and Horses'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '2'
source_sizelimit: '40000'
problem_author: kol_adm
problem_tester: null
date_added: 21-12-2016
tags:
    - kol_adm
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493556745
layout: problem
---
All submissions for this problem are available.There are **nm** men living in a town. They have **nh** horses, each capable of carrying only one man at a time. All the men are supposed to attend a dinner party **d** km away from their house. They should start their journey together and reach destination in minimum time. Speed of each man is **vm** km/hour whereas speed of each horse (with or without somebody on back) is **vh** km/hour. You need to find the minimum time required to complete the journey? For simplicity you can assume the following things:

- No time is needed in riding a horse or getting down from a horse.
- The horses are very well trained to execute any instruction given to it.
- No time is needed for changing the direction of horse or man.
- The town and the dinner party location can be considered as two different points and all people and horses travel along the straight line connecting these two points.

### Constraints

- d (0 < d ≤ 10000)
- nm (1 < nm ≤ 1000)
- nh (0 < nh ≤ 1000)
- vm (0 < vm ≤ 20)
- vh (0 < vh ≤ 50)

### Input

Each input set consists of five integers **d, nm, nh, vm, vh** in a new line. Input ends with five 0s in a line. There will be at max **105+1** lines in the input

### Output

For each line of input except the last one produce one line of output. This line should print a fraction **p** by **q**, in **p/q** form. This denotes the minimum possible reaching time of all men. Here **p** and **q** must be relative prime.

### Sample

<pre><b>Input</b>   
70 2 1 5 10
0 0 0 0 0 

<b>Output</b>
49/5
</pre>