---
category_name: challenge
problem_code: SHOPPING
problem_name: Shopping
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: kevinsogo
date_added: 6-03-2015
tags:
    - ad
    - challenge
    - may15
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SHOPPING'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1525454424
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MAY15/mandarin/SHOPPING.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/SHOPPING.pdf).

*This is an interactive problem. Please refer to "Interactivity details" section in order to get acquainted with the IO format. Good luck!*

About two years ago, Sergey has bought a wallet. Since then, he's constantly facing kind of difficulty, when he pays for something.

The main reason is that the wallet doesn't have much sections in it, but Sergey, trying to be neat, always wants to keep his money in the sorted order. For example, he doesn't want to put the 50,000 burles bank note between two 100,000 burles bank notes. So, any time he gets the change, he finds the appropriate place in the wallet for each bank note, that might be very slow and irritating for both the cashier and for the next person in the queue, and our protagonist does not like it. Now it is time to change something!

Of course, he could just order a credit card or more spacious wallet, but as the person who loves adventures, Sergey has decided to go another way.

Now, in Sergey's country, there are **N** types of bank notes. The smallest bank note's value is **1** burle. The value of the bank note of the **i**-th type is **Vi** burles. Initially, Sergey has **Ai** bank notes of the value of **Vi**.

Our protagonist plans all the purchases very well. For every his visit to the shop, he'll know the amount of money he's going to spend and will report it to you, right before the visit to this shop. The purchase proceeds in the following way:

- First, Sergey gives some amount of money to the cashier. This amount should not be less than the value of the purchase (obviously). Of course, Sergey is free to choose the way he'll collect the amount he's going to give, for example he can give 100,000 burles as one bank note of 100,000 burles, or he can use 1,000 bank notes of the value of 100 burles, or he can use 500 bank notes of the value of 100 burles and one bank note of the valie of 50,000 burles, etc. It will always be possible to give the amount, not less that the required.
- Then the cashier gives the change according to the following algorithm: first she gives as much bank notes of the largest value as possible in such a way that the given amount doesn't exceed the value of change, then she gives as much bank notes of the second largest value as possible in such a way that the given amount (considering previously given bank notes of the largest value, as well) doesn't exceed the amount of the change, and so on. Cashiers are provided with infinite number of bank notes of each type, and Sergey knows it well. In other words, cashiers collect the change greedily. Since there is a bank note of the value of **1**, this algorithm will always be enough to collect the change correctly.

Then, as the time goes, Sergey receives some more money. It can be a scholarship (he's a student), or anything else. Sergey knows the amount of money he's going to get any of these times. For getting it, there are a few ATMs in the city. The ATMs are not as good as cashiers, so each of them has infinite supply of some set of bank notes, but, possibly, not all the kinds. So each time, Sergey receives some money, he chooses the ATM where he wants to get it, and gets the whole amount from the specified ATM. Nevertheless, all the ATMs has supply of the bank note of the value of **1**, so it's possible to receive the required amount of money from any of them. It needs to be pointed out that when Sergey receives some money, he collects it from the chosen ATM immediately. The ATMs work the same way as the cashiers when collect a change.

Sometimes, new bank notes are issued by Sergey's country National Bank. Sergey will provide you the information about such events as well. You can consider that after the new bank note is introduced, all the shops has infinite supply of this bank note immediately.

Finally, some new ATMs might also be built. For each of them, the list of present bank notes will be given. Sergey explored the bank's website and gathered all the information about the new ATMs.

Now, Sergey asks you to develop the strategy of how much money he needs to give, and using which bank notes; and which ATMs to use in order to minimize the total amount of bank notes that will be given to him as a change.

### Test data information

There are 20 test cases in total. The test cases are separated in 5 groups:

- Group **1**: **1** ≤ **E** ≤ **100**, **1** ≤ **Vi** ≤ **1000**. Moreover, you can assume that Sergey will neither spend nor receive more than **1000** burles at once.
- Group **2**: **1** ≤ **E** ≤ **1000**, **1** ≤ **Vi** ≤ **1000**, you can assume that Sergey will neither spend nor receive more than **106** burles at once.
- Group **3**: **1** ≤ **E** ≤ **100**, **1** ≤ **Vi** ≤ **106**, you can assume that Sergey will neither spend nor receive more than **108** burles at once.
- Group **4**: **1** ≤ **E** ≤ **1000**, **1** ≤ **Vi** ≤ **106**, you can assume that Sergey will neither spend nor receive more than **4 \* 108** burles at once.
- Group **5**: **1** ≤ **E** ≤ **104**, **1** ≤ **Vi** ≤ **106**, you can assume that Sergey will neither spend nor receive more than **109** burles at once.

Each group consists of **4** test cases. Moreover, the following will be held in all the test cases:

- 0 ≤ **Ai** ≤ **104**
- **1** ≤ **N**, **M** ≤ **20**
- At the end of all the operations, there will be no more than **61** different bank notes' values and no more than **61** ATMs.

During the contest, you will only see the score on the following test set (that is 20% of the test data):

- One test case from the first group.
- One test case from the second group.
- One test case from the third group.
- One test case from the fourth group.

The problem will be rejudged on the full test set after the end of the competition. The score is the total amount of bank notes that will be given to Sergey by cashiers as a change. You need to minimize it.

### Input

The first line of input contains two space separated integers **N** and **M** denoting the number of the bank notes' values and the number of ATMs respectively.

The second line contains **N** space separated integers **V1**, **V2**, ..., **VN** denoting the values of bank notes.

The third line contains **N** space-separated integers **A1**, **A2**, ..., **AN**, where **Ai** denotes the amount of bank notes of the value of **Vi** that Sergey has initially.

Then, there are **M** lines. Each of these lines describes a single ATM, in the following format:

- First, there is an integer **Kj**, denoting the amount of different bank notes' values in this ATM.
- Then, there are **Kj** integers, denotes the bank notes' values, available in this ATM. You can safely assume that there won't appear a non-existing value of a bank note.

The next line contains a single integer **E**, denoting the number of events. The following **E** lines denote the events in the chronological order.

The event will be described in one of the following ways:

- **Pay X**. Means that Sergey makes a purchase with the value of **X** burles.
- **Receive X**. Means that Sergey receives **X** burles.
- **Banknote X**. Means that the new bank note of the value **X** burles is introduced.
- **ATM P Q1 Q2 ... QP**. Means that the new ATM that has infinite supply of the bank notes of the values of **Q1, Q2, ..., QP** is built and can be used.

### Output

For each "Pay" and "Receive" event, output a single line containing:

- For each "Pay" event, output the way Sergey should collect money in order to make a purchase. Output **N'** integer numbers, where **N'** does stand for the current number of different bank notes' values in Sergey's country. The **i**-th integer in the output should contain the number of the bank notes on the **i**-th smallest value that should be paid to the cashier.
- For each "Receive" event, output a single integer, denoting the ID of the ATM that Sergey should use to receive his money. The ATMs get their IDs according to the following rules: the first **M** get IDs from **1** to **M** inclusively (in order they appear in the input), the added ATMs hold the IDs **M+1, M+2, ...** in order they're built.

Please don't use more than **231-1** bank notes of any particular kind in any of your payments. ### Interactivity details

Like in the real life, you won't know everything in advance. So, you will get the information about the event only after you've answered the previous one.

Anytime you answer "Pay" or "Receive" query (namely, output anything), please flush output buffer. If you use C++, you can use the function **fflush(stdout)**. If you don't flush output buffer, your program won't get the information about the next queries correctly.

### Example

<pre><b>Input:</b>
5 2
1 5 20 50 100
5 4 3 2 1
2 1 50
3 1 20 100
5
Pay 112
Receive 573
Pay 9
Receive 846
Pay 576

<b>Output:</b>
0 0 0 1 1
1
0 0 0 1 0
1
0 0 0 12 0
</pre>