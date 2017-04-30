---
languages_supported:
    - NA
title: MUFFINS2
category: NA
old_version: true
problem_code: MUFFINS2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Now that Chef has streamlined his cupcake baking procedure, he's turning his attention toward frosting the cupcakes. He recently purchased a machine that produces frosting. Each cupcake requires one unit of frosting, and the frosting machine requires K2 units of energy to produce K units of frosting in one minute (K need not be an integer). Cupcakes arrive in batches, once per minute, needing frosting. The cupcakes must be frosted within a minute of when they arrive. The frosting machine also has a reserve unit, so it can produce extra frosting to be used later. The reserve unit has a capacity of S units of frosting, and is initially empty. The machine may produce more units of frosting than is currently demanded, and the excess will be added to the reserve unit. Or, the machine can produce fewer units of frosting than is currently demanded, drawing the remainder of what is needed from the reserve. At all times the reserve unit must have between 0 and S units of frosting.

Chef has a schedule ahead of time of exactly how many cupcakes will arrive each minute needing frosting, and can create a frosting production schedule for the machine that will optimize its energy usage. The machine may produce a different amount of frosting each minute. Given the cupcake schedule, calculate the minimum energy needed to frost all the cupcakes divided by the total number of cupcakes.

### Input

Input will begin with an integer T, the number of test cases. Each test case begins with 2 integers N and S on a line, representing the number of minutes the machine will operate, and the capacity of the storage unit, respectively. Following is a line with N space-separated integers C0...CN-1, where Ci is the number of cupcakes arriving at time i.

### Output

For each test case, output on a single line the minimum total energy consumption of the machine divided by the total number of cupcakes, rounded to 5 places after the decimal point.

### Sample input

```
4
5 0
1 2 3 4 5
5 1
0 0 0 0 2
5 2
0 0 0 0 2
5 2
2 0 0 0 0

```
### Sample output

```
3.66667
0.62500
0.40000
2.00000

```
### Constraints

T<50
1≤N≤30000
0≤S≤30000
0≤Ci≤20000
At least one Ci will be non-zero