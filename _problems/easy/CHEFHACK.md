---
category_name: easy
problem_code: CHEFHACK
problem_name: 'End Of The World'
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
problem_author: khadarbasha
problem_tester: anton_lunyov
date_added: 31-10-2012
tags:
    - dfs
    - easy
    - jan13
    - khadarbasha
    - sieve
editorial_url: 'http://discuss.codechef.com/problems/CHEFHACK'
time:
    view_start_date: 1358247077
    submit_start_date: 1358247077
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.**Important!!! Human's are in Danger... It may be The End of the Universe!!!**

**Aliens** had stolen the important data about the **Birth of the Human beings** and they kept this data in their secured **Data Center**. With the help of these data along with the advanced technologies Aliens had initiated a project called **It's The End** to get rid of the human beings and occupy the Earth.

On the other side, **Chef Po** is a good and very well-known **Hacker**. He is a great human lover, so he decided to get the data back from the Aliens by hacking their Data Center.

The Aliens Data Center contains various servers arranged in **N** rows and **N** columns and the Master Server will be at the last row and the last column of the Data Center. Denote the server at the intersection of the **i**-th row and the **j**-th column of the Data Center as **Server\[i\]\[j\]** (**1** ≤ **i**, **j** ≤ **N**). So in this notation Master Server is **Server\[N\]\[N\]**. Two servers are connected to each other if they are located either at the same row and consecutive columns or at the same column and consecutive rows. In other words, **Server\[i\]\[j\]** and **Server\[i-1\]\[j\]** are connected to each other for all **i** and **j** such that **2** ≤ **i** ≤ **N** and **1** ≤ **j** ≤ **N**. Also **Server\[i\]\[j\]** and **Server\[i\]\[j-1\]** are connected to each other for all **i** and **j** such that **1** ≤ **i** ≤ **N** and **2** ≤ **j** ≤ **N**.

Aliens had divided the **Data File** with the data about the Birth of the Human beings into **N \* N** parts denoted as **F\[i\]\[j\]** (**1** ≤ **i**, **j** ≤ **N**) and placed the part **F\[i\]\[j\]** at the **Server\[i\]\[j\]**. Each server has a password which is some non-negative integer. Chef Po needs to crack all the servers in order to get all parts of the **Data File**.

Aliens are really strange beings so they single out three types of passwords:

- **Prime Password**, which is the prime number. The list of prime numbers starts as **2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, ...**
- **Even Password**, which is the even non-prime number. This list starts as **0, 4, 6, 8, 10, 12, 14, ...** Note, that we exclude **2** since it is a prime.
- **Odd Password**, which is the odd non-prime number. This list starts as **1, 9, 15, 21, 25, 27, 33, 35, 39, 45, 49, ...** So it is the list of all odd positive numbers where primes are excluded.

For simplicity we call server secured by the Even Password as Even Server. Similarly we define notion of Odd Server and Prime Server.

Each Odd or Even server has a friendly screen with the color indicator. Assume that you enter the password trying to guess the actual password at this server. Then indicator will become green if you enter the number which is smaller than the actual password, it will become red if your number is greater than the actual password or you will get the access to the server (and, thus, to the needed part of the Data File) if the password is correct.

On the other hand, each Prime Server has no such screen and the only way to crack it is to try all prime numbers until you find out the correct password. So our Chef simply iterate over the list of primes in increasing order and try them until he finds the correct password.

Probably most of you think that to crack servers with friendly screen Chef Po will use binary search. But he is quite weird Hacker and doesn't know this concept. To crack server with the friendly screen he will use the following strategy. He will try all even numbers starting from 0 (even number 2) until he either finds the correct password or the indicator becomes red which automatically would mean that the password is odd and equals to the **K-1** where **K** is the even number that was entered at last. So he enters **K-1** in the latter case and get the access to the server.

Let's consider some examples.

- Let the password be **4**. It is an Even Password so Chef will see the friendly screen which means for him that the server is either Even or Odd. Hence he will try passwords in the order **0, 2, 4** making 2 unsuccessful tries.
- Let the password be **9**. It is an Odd Password so again Chef will see the friendly screen which means for him that the server is either Even Server or Odd Server. Hence he will try passwords in the order **0, 2, 4, 6, 8, 10, 9** making 6 unsuccessful tries. Note that after he enters **8** the indicator becomes green indicating that the password is greater than **8**, on the other hand, after he enters **10** the indicator becomes red indicating that the password is less than **10**. Since the only integer number greater than **8** and less than **10** is **9** he will enter it at the last step getting the access to the server.
- Finally, let the password be **11**. It is a Prime Password so Chef will not see the friendly screen which means for him that the server is Prime Server. Hence he will try passwords in the order **2, 3, 5, 7, 11** making 4 unsuccessful tries.

The Alien Data Center has very interesting vulnerability, that Chef has noticed by analyzing Alien's secured correspondence. If Chef crack some Even Server **S** then all Even Servers connected to **S** become cracked as well, and all Even Servers connected to these servers also become cracked and so on. More formally, the Even Server **S'** becomes cracked if it is connected with **S** via possibly other Even Servers. That is, there exists a sequence of Even Servers such that each two consecutive servers in this sequence are connected, the first server is **S** and the last server is **S'**. Chef calls this vulnerability as **"Grid Hacking Mechanism"**. The same is true for Odd Servers. By it is no longer true for Prime Servers. So each Prime Server should be cracked individually.

Now the final tactic for Chef is the following.

- He will consider the servers in row-major order.
- That is, at first he consider servers of the first row in the order **Server\[1\]\[1\]**, **Server\[1\]\[2\]**, ..., **Server\[1\]\[N\]**. Then he considers servers of the second row in the order **Server\[2\]\[1\]**, **Server\[2\]\[2\]**, ..., **Server\[2\]\[N\]** and so on until he reaches the last server in the last row (which is the Master Server).
- For each server he at first check whether it is already cracked by the **"Grid Hacking Mechanism"**.
- If yes then he gathers the corresponding part of the Data File and move on.
- Otherwise he checks for the friendly screen at this server and apply one of the cracking tactics described above.
- That is, when he sees the friendly screen he will enter even numbers starting from zero until he finds the password in the way described above. After that he gathers the corresponding part of the Data File and also some other servers become cracked by the **"Grid Hacking Mechanism"**.
- And when he doesn't see the screen he will enter prime numbers in increasing order until he finds the password. After that he again gathers the corresponding part of the Data File but no other servers become cracked since **"Grid Hacking Mechanism"** does not work for Prime Servers.
- Finally he will reach the Master Server, crack it and gather the last part of the Data File.

But the only way to recombine the original file is to use special Alien utility called **winripzar** on the Master Server. It also has the password. Chef Po is a great hacker, so he found out using his special skills that the password for **winripzar** equals to the number of unsuccessful tries used by him to crack all the servers in the Data Center.

After cracking all the servers and gathering all the parts of the Data File Chef became so happy that forgot the number of unsuccessful tries he made during this cracking marathon. But he noted down passwords for all the servers and now asks you for help. Calculate the number of unsuccessful tries Chef did during cracking of all the servers and let him save the Earth!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains a single integer **N**. Each of the following **N** lines contains **N** space separated integers. The **j**-th number at the **i**-th line denotes the password at the **Server\[i\]\[j\]**.

### Output

For each test case, output a single line containing the number of unsuccessful tries used to crack all the servers in the Data Center.

### Constraints

- **1** ≤ **T** ≤ **8**
- **1** ≤ **N** ≤ **350**
- 0 ≤ **each password** &lt; **107**

### Example

<pre>
<b>Input:</b>
2
3
2 6 4
4 8 9
7 9 4
2
8 4
15 4

<b>Output:</b>
20
13
</pre>
### Explanation

**Example case 1.**

The type of each server can be found in the following table.

PrimeEvenEvenEvenEvenOddPrimeOddEvenNow the process of cracking of servers by the Chef will be the following.

- At first Chef cracks the **Server\[1\]\[1\]** secured by the password **2** which is a prime number. Hence Chef does not see the friendly screen and tries prime numbers in increasing order. Since **2** is the smallest prime number he cracks this server without unsuccessful tries. Since it is a Prime Server than **"Grid Hacking Mechanism"** does not work here.
- Next Chef cracks the **Server\[1\]\[2\]** secured by the password **6** which is an Even Password (even non-prime number). Hence Chef sees the friendly screen and tries even numbers in order **0, 2, 4, 6** making 3 unsuccessful tries to crack this server. Since it is an Even Server than by **"Grid Hacking Mechanism"** the following 3 servers also become cracked: **Server\[1\]\[3\]**, **Server\[2\]\[1\]** and **Server\[2\]\[2\]** since they all Even Servers and connected to the **Server\[1\]\[2\]** via other Even Servers (see the above table). Note, that Even **Server\[3\]\[3\]** does not become cracked since it is not connected to **Server\[1\]\[2\]** via other Even Servers.
- Next Chef consider the **Server\[1\]\[3\]**. As was mentioned above it was already cracked so Chef simply gatheres the corresponding part of the Data File without entering any numbers.
- The same is true for the next two servers **Server\[2\]\[1\]** and **Server\[2\]\[2\]**.
- But **Server\[2\]\[3\]** is secured by the odd non-prime number **9** so it is an Odd Server and Chef tries numbers in order **0, 2, 4, 6, 8, 10, 9** making 6 unsuccessful tries to crack it. Applying **"Grid Hacking Mechanism"** for this server has no effect since it is not connected to any other Odd Server.
- The **Server\[3\]\[1\]** is Prime and Chef tries numbers in order **2, 3, 5, 7** making 3 unsuccessful tries to crack it.
- The **Server\[3\]\[2\]** is Odd and was not cracked earlier. Hence Chef tries numbers in order **0, 2, 4, 6, 8, 10, 9** making 6 unsuccessful tries to crack it.
- The **Server\[3\]\[3\]** is Even and was not cracked earlier. Hence Chef tries numbers in order **0, 2, 4** making 2 unsuccessful tries to crack it.

Summarizing we see that Chef made 20 unsuccessful tries in all. Their distribution among servers can be found in the following table.

030006362**Example case 2.**

The type of each server can be found in the following table.

EvenEvenOddEvenNow the process of cracking of servers by the Chef will be the following.

- The **Server\[1\]\[1\]** is Even and Chef tries numbers in order **0, 2, 4, 6, 8** making 4 unsuccessful tries to crack it.
- The **Server\[1\]\[2\]** is Even and already cracked by the **"Grid Hacking Mechanism"**.
- The **Server\[2\]\[1\]** is Odd and Chef tries numbers in order **0, 2, 4, 6, 8, 10, 12, 14, 16, 15** making 9 unsuccessful tries to crack it.
- The **Server\[2\]\[2\]** is Even and already cracked by the **"Grid Hacking Mechanism"**.
Thus, Chefs made 13 unsuccessful tries and their distribution among servers can be found in the following table.


4090### Warning!

The input file size could reach almost 8MB so be sure you are using fast I/O method.
