---
category_name: easy
problem_code: DRGNBOOL
problem_name: 'Fierce Battles'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: anton_lunyov
date_added: 19-04-2012
tags:
    - cakewalk
    - kaushik_iska
    - oct12
editorial_url: 'http://discuss.codechef.com/problems/DRGNBOOL'
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available.In the world of **DragonBool** there are fierce warriors called **Soints**. Also there are even fiercer warriors called **Sofloats** – the mortal enemies of **Soints**.

The power of each warrior is determined by the amount of chakra he possesses which is some positive integer. Warriors with zero level of chakra are dead warriors :) When the fight between **Soint** with power **CI** and **Sofloat** with power **CF** occurs the warrior with lower power will die and the winner will lose the amount of chakra that his enemy have possessed before the fight. So three cases are possible:

- **CI** &gt; **CF**. Then **Sofloat** will die while the new power of **Soint** will be **CI – CF**.
- **CI** &lt; **CF**. Then **Soint** will die while the new power of **Sofloat** will be **CF – CI**.
- **CI** = **CF**. In this special case both warriors die.

Each warrior (**Soint** or **Sofloat**) has his level of skills which is denoted by some positive integer. The fight between two warriors can occur only when these warriors are **Soint** and **Sofloat** of the same level. In particual, friendly fights are not allowed, i.e., a **Soint** cannot fight with another **Soint** and the same holds for **Sofloats**.

Lets follow the following convention to denote the warriors. A **Soint** of level **L** and power **C** will be denoted as **(I, C, L)**, while **Sofloat** of level **L** and power **C** will be denoted as **(F, C, L)**. Consider some examples. If **A = (I, 50, 1)** fights with **B = (F, 20, 1)**, **B** dies and **A** becomes **(I, 30, 1)**. On the other hand, **(I, 50, 1)** cannot fight with **(F, 20, 2)** as they have different levels.

There is a battle between **Soints** and **Sofloats**. There are **N Soints** and **M Sofloats** in all. The battle will consist of series of fights. As was mentioned above in each fight one **Soint** and one **Sofloat** *of the same level* take part and after the fight the warrior with lower power will die (or both will die if they have the same power). The battle proceeds as long as there exists at least one pair of warriors who can fight. The distribution of warriors by levels satisfies the following condition: for every **Soint** of level **L** there exists at least one **Sofloat** of the same level **L** and vice-versa. So if for some level **L** we have at least one warrior of this level then there is at least one **Soint** of level **L** and at least one **Sofloat** of level **L**.

There is a powerful wizard, whose name is **SoChef**, on the side of **Soints**. He can increase the amount of chakra of each **Soint** by any number. **SoChef** wants the army of **Soints** to win this battle. But increasing amount of chakra of any **Soint** by one costs him a lot of his magic power. Hence he wants to minimize the total amount of additional chakra he should give to **Soints** in order for them to win. Note, however, that the win here means that all **Sofloats** should be dead irregardless of whether any **Soint** is alive. Also note that the battle can proceed by different scenarios and the **SoChef** need to distribute additional chakra among the **Soints** in such a way that they will win for any possible battle scenario. Help **SoChef** and find the minimal amount of additional chakra he should give to **Soints** in order for them to win.

### Input

The first line of the input contains an integer **T**, the number of test cases. **T** test cases follow. The first line of each test case contains two space separated integers **N** and **M**. Here **N** is the number of **Soints**  participating in the battle and **M** is the number of **Sofloats**  for the same. Each of the next **N** lines contains two space separated integers  **Ci** and  **Li**, the amount of chakra and level of **i**-th **Soint** correspondingly. The next **M** lines describe power and level of **Sofloats** participating in the battle in the same format.

### Output

For each test case output a single integer on a single line, the minimum amount of chakra **SoChef** should give to **Soints** in order for them to win the battle.

### Constraints

Each integer in the input file is positive and does not exceed **100**. That is

**1** ≤ **T** ≤ **100**
**1** ≤ **N** ≤ **100**
**1** ≤ **M** ≤ **100**
**1** ≤ **Ci** ≤ **100**
**1** ≤ **Li** ≤ **100**
For every **Soint** of level **L** there exists at least one **Sofloat** of the same level **L** and vice-versa.

**It is guaranteed that each official test file will satisfy all these constraints. You DON'T need to verify them in your program.**

### Example

<pre>
<b>Input:</b>
2
2 3
10 1
20 2
5 2
5 2
18 1
5 5
73 87
69 13
36 36
77 46
43 93
49 46
74 93
78 87
99 13
59 36

<b>Output:</b>
8
89
</pre>
### Explanation

**Case 1.**The warriors are **I1 = (I, 10, 1), I2 = (I, 20, 2), F1 = (F, 5, 2), F2 = (F, 5, 2), F3 = (F, 18, 1)**. Without the **SoChef** help the battle can proceed as follows.

- **I2** fights with **F1**, **F1** dies, **I2** becomes **(I, 15, 2)**.
- **I2** fights with **F2**, **F2** dies, **I2** becomes **(I, 10, 2)**.
- **I1** fights with **F3**, **I1** dies, **F3** becomes **(F, 8, 1)**.

So if **SoChef** will give **8** additional units of chakra to **I1** the **Soints** will win the battle and even one **Soint** (**I2**) will left alive. Hence the answer is **8**.
