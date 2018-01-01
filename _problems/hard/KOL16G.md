---
category_name: hard
problem_code: KOL16G
problem_name: 'Optimal use of Nuclear Power plant '
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '4'
source_sizelimit: '50000'
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
All submissions for this problem are available.It is now 2050 AD. A city will be built under large protective circular dome. A nuclear power plant **(NPP)** built outside the city will power the whole city. For safety reasons the **NPP** must be at least **dmin** distance away from the dome. The radius of the dome has not been fixed yet. The houses inside the dome will be built after building the dome. So for simplicity it can be assumed that each location under the dome is equally likely to have a house. In other words houses will be uniformly distributed in the land inside the dome. As the houses are full of modern electrical equipments, so the power consumption per house is quite high. So each house is connected with the **NPP** with the shortest possible cable underground. In the figure below you can see four houses (Blue circles) and their shortest connection with **NPP** (dotted line). For wiring cost and line-loss issues the average distance of the houses (assuming they are uniformly distributed under then dome) from the **NPP** cannot be more than **Davg**.

![](https://www.codechef.com/download/upload/ACM16KOL/G.png)Given the value of **Davg, dmin** your job is to find the maximum possible value of the radius of the land under dome.

### Input

First line of the input file contains an integer **T (0 < T ≤ 20)** which denotes how many test cases to follow. Each of the next **T** lines contains two strictly positive integers **Davg (0 < Davg <1000)** and **dmin (0 < dmin < Davg)**. The meaning of **Davg** and **dmin** are given in the problem statement above.

### Output

For each test case produce one line of output. This line contains a floating-point number **Rmax**, which denotes maximum possible value of the radius of the circular land under the dome maintaining the constraints imposed by **Davg** and **dmin**. This value should be rounded to four digits after the decimal point. Errors not exceeding **1.5 \* 10-4** will be ignored.

### Sample

 ```
<b>Input</b>
2
100 20
10 5

<b>Output</b>
72.6679
4.7114

<pre>