---
languages_supported:
    - NA
title: MMADNESS
category: NA
old_version: true
problem_code: MMADNESS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

At Directi, we have many machines connected to each other since we host many web-sites. However, administering these machines is a great hassle. That is because a machine can be administered only by a machine connected directly to it (a machine that is an administrator can administrator itself). So, the system administrators have decided to convert some of the machines in the network to "administrative machines". However, the cost of converting a machine to an administrative machine is $100, which is pretty high. So, the system administrators approach you to help them out.

You will be given a list of machines which have a direct connection between them. You need to compute the least cost that the company needs to incur so that every machine in the final network is administrable by at least one of the machines converted to administrative machines.

### Input

The first line of input will contain an integer 't', the number of test cases (1 t 100). Each test case starts with a blank line followed by an integer 'n' which specifies the number of connections between machines (0 n 100). Each of the 'n' lines that follows contains a pair of upper-case characters between A and Z that are separated by a space. Each distinct character represents a machine.

### Output

For each test case, your output should contain the least amount of money in dollars that you need to spend so that every machine in the network is administered by at least one administrator machine.

### Example

<pre>
<b>Input:</b>
1

4
A B
A C
B E
B D

<b>Output:</b>
200

</pre>
Explanation: In this case, the least cost you have to incur is $200 and it can be achieved by converting machines A and B to administrative machines.

The diagrammatic representation for the example test case above:

![](http://careers.directi.com/download/attachments/25657412/puzzle_march09.png)
