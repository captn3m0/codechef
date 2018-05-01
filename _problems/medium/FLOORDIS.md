---
category_name: medium
problem_code: FLOORDIS
problem_name: 'Floor Distribution'
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
problem_author: cenadar
problem_tester: furko
date_added: 1-12-2015
tags:
    - cenadar
    - march16
    - maxflow
    - medium
    - mincut
    - minimum
editorial_url: 'http://discuss.codechef.com/problems/FLOORDIS'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493557656
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/FLOORDIS.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/FLOORDIS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/FLOORDIS.pdf) as well.

Chef just come up with a very good idea for his business. He needs to hire two group of software engineers. Each group of engineers will work on completely different things and people from different groups don't want to disturb (and even hear) each other. Chef has just rented a whole floor for his purposes in business center "Cooking Plaza". The floor is a rectangle with dimensions **N** over **M** meters. For simplicity of description the floor's structure, let's imagine that it is split into imaginary squares of size **1x1** called "cells".

 The whole floor is split into rooms (not necessarily rectangular). There are some not noise-resistant walls between some of the cells. Two adjacent cells belong to the same room if they don't have the wall between them. Cells are considered adjacent if and only if they share an edge. Also, we say that relation "belong to the same room" is transitive. In other words we say that if cells **A** and **B** belong to the same room and **B** and **C** belong to the same room then **A** and **C** belong to the same room.

So we end up having a partition of the floor into rooms. It also means, that each point on the floor belongs to some room.

Chef have to distribute the rooms between engineers of two groups. Engineers from the different groups cannot seat in the same room. If engineers from a different groups seat in adjacent rooms, the walls these rooms share have to be noise-resistant. The cost of having one meter of wall isolated is **I** per month. Due to various reasons Chef has to pay an additional cost for support of each of the room (e.g. cleaning costs money as well). Interesting to know that support cost for a particular room may differ depending on engineers of which group seat in this room.

Chef doesn't know the number of people he needs in each group of engineers so he wants to minimize the money he needs to pay for all the floor rent and support. He will see how it goes and then redistribute the floor or find another floor to rent or whatever. Either way, you don't need to care about this.

Please pay attention to the restriction that all the rooms should be occupied by engineers of one of the teams. Also, it might happen that all the rooms will be assigned to the same team and this is completely okay.

### Input

The first line of the input contains three integers **N**, **M**, **W**, **K** and **R**, where **N** and **M** denote size of the floor, **W** denote number of one-meter-length walls, **K** denote cost of having one-meter-length wall be noise-resistant and **R** denote the number of rooms in which floor is partitioned.

Next **W** lines contain four integers each **X1**, **Y1**, **X2**, **Y2**. This means that cells with coordinates **X1**, **Y1** and **X2**, **Y2** have a wall between them. It's guaranteed that this cells share an edge.

Next **R** lines will contain four space separated integers each **X**, **Y**, **C1**, **C2**. This should be treated as support cost per month in a room that contain cell **X**, **Y** is **C1** for first group of engineers and **C2** for second group of engineers. It's guaranteed that all of cells among these **R** cells belong to different rooms. All coordinates are indexed starting from **1**.

### Output

Output a single integer - sum of the rent and support costs per month.

### Constraints

- **1** ≤ **N, M** ≤ **1000**
- **1** ≤ **W** ≤ **min(2\*N\*M, 150000)**
- **1** ≤ **X1** ≤ **N**
- **1** ≤ **Y1** ≤ **M**
- **1** ≤ **X2** ≤ **N**
- **1** ≤ **Y2** ≤ **M**
- **1** ≤ **K** ≤ **10000**
- **1** ≤ **C1**, **C2** ≤ **10000**
- Limitations on **R** is described in subtasks section.

### Subtasks

- **Subtask #1 \[30 points\]: 1 ≤ R ≤ 50**
- **Subtask #2 \[70 points\]: 1 ≤ R ≤ 500**

### Example

<pre><b>Input:</b>
2 4 5 5 3
1 2 1 3
1 2 2 2
1 3 2 3
1 4 2 4
2 1 2 2
1 1 30 12
1 3 10 15
2 3 11 22
<b>Output:</b>
48
</pre>### Explanation

Here's the scheme of the floor

![](https://lh3.googleusercontent.com/Kf814fLVhIDx-8ZczUSmJAqNDTWpVLHBD6lwZr3HMxxk5OUb1xOU01vCTSIAcgD9Vpo4fYhVwIfRLc9VNDE_g0kVnbFrZRfKkDyfdUJjXaP2VhsYwy1nGXTOwGpsgXNcoOpkpLc4Qs_rDsX23T56BGkTX4M4Z0Q8gcP0T7UqYGI4x2luDAw5MSSgdJlg186Rgo0YATY8HW4HIDUbvWa_zPITOJojByg62rWs8HcKfTxg4T5hD1QVTNfUUxTkyv9b9jivONq2RWxFPAcOt_o2WNmMYAFiEHkkZ-h6hLxWwrb2LA4VLa92xIvLV8mG3W_ZOD8ZGFCG-F6GXskHW8jhq8IppGi9Hp2dGJ2I4PvWIT9yY8R-9h3BbNk6YoC9iYkuge2ghzuJ2N-Q5CogdnnZ-wUh6WK0yC37E7MLKAEKWyy4LGRTlq0689T_OVOKkIHBHKSUvUgYmbwGbtbkO71HXPIYUXgX0xtrnEWxKYuHtmM1KMmV8gY4f55vCnd3Hc1Mw5LqMphYfI1eWOFVBITsbHwmt41TomOyJIXboRpSfcxFst_o-Cd1TiCHpFpNiBEi52oT=w426-h210-no)

The correct assignment is the following.

![](https://lh3.googleusercontent.com/FtZg4eSBDWSnD4RA1oNWH6-we9jnXlyBwVmdXYTJCwUmqI8GotpZi_48dmsYO_s6wvr-r7qGd2xYFl3J-1AhlL4f_Kn9iaH63QSHDgpUQdtHXurhrwYHzunNXeFBYfsjCfawrIsyc37SylEUwsv-tgPdRejhUmjuQo-s_RpeWsO_aL2TqUA-ewE65vLdHcS5cP6_I9FHDZ6XyBqTAq67nxyJu1A2AB6beFynSenTwRX6-9uZoDTgrXy6mAEcMwMk4KpVpxRtbwkRr5BI22G1yct-CUtlPEzJIIS_57qYIb_DapcranpRISalB6kHxRYtNenWhA7yxyZ_efiCh3xlRH8nkVC1-l2xc3ty1RzwOM7dZo2UhDCrWqJ81eSFpd76EWZ_RmdU1clMeoOBAkJyEfVITfoA7F2R1sE40504Y5ytcTpL0wUxTfh9QJan34Y5bjImycu3gmDiQAnQhJxo_V36B7dDejIc_T3bJySbXfGzqwWGRpS1MQ319ywKi_Ca4ymF51HMX-0toslxf8h08Uw_TxrrMSHFctsN8AZcBujIGplkU_55Ag0mkYnJnZhodnCY=w426-h210-no)

- The blue color denotes assignment to the first team. Total cost for renting two rooms for this team is **11 + 10 = 21**.
- The red color denotes assignment to the second team. Total cost for renting the only room for the team is **12**.
- There are **3** meters of walls between them, resulting in isolating cost of **15**.
The grand total is **21 + 12 + 15 = 48**
