---
category_name: challenge
problem_code: MATDW
problem_name: 'Mathison and the Data Warehouse (Challenge)'
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
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: alexvaleanu
problem_tester: null
date_added: 31-07-2017
tags:
    - alexvaleanu
    - aug17
editorial_url: 'https://discuss.codechef.com/problems/MATDW'
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1525454454
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available. After finishing his internship at [DeepMind](https://deepmind.com/), Mathison has started his own company. Knowing that storing data is probably the most important thing a company should take care of, he decided to manage a data warehouse. DWs are central repositories of integrated data from one or more disparate sources. They store current and historical data in one single place and are used for creating analytical reports for knowledge workers throughout the enterprise (check [Wikipedia](https://en.wikipedia.org/wiki/Data_warehouse) for more details).

 Managing a DWH is not an easy task so Mathison would like you to help him. In this task, you have to implement a simplified version of a data warehouse managing system. A DWH managing system is an **interactive** application that handles users' requests, stores and retrieves data, buys hard disk drives (HDDs) and much more.

 Your application must handle three types of events:

- **0 cid q**
 Client with id *cid* wants to store *q* cells of data. - **1 cid p**
 Client with id *cid* wants to retrieve his *p-th* data-cell. - **2 hid**
 Hard-disk with id *hid* has crashed and all data that was stored on it is lost. The hard-disk can still be used in the future! 
In order to simplify the problem, you can assume that a client is allowed to store data only once. But he is allowed to query the warehouse as many times as he wants.

A client will not query the data warehouse if he has no data stored!

 In order to handle some events, your application can send these types of commands involving storing/retrieving data:

- **s hid pid**
 This command **must** follow a client's request to store data and means that you store the previous client's data on hard-disk *hid*, starting at cell *pid* (0-based indexing) 
 For example, you might have a request of form **0 100 10**. The client with id 100 wants to store 10 units (cells) of data in our warehouse. Let's assume you have a hard-disk (with id 5). You can respond with a command **s 5 120**, meaning that you store the client's 100 units of data on only one hard-disk, hdd5 from cell 120 to cell 129. All ids **must** be valid. You must be careful not to overflow any HDD!
 **Note: You can choose not to store the data (a risky move). In this case, you have to print -1 -1 for *hid* and *pid*. No penalty fee will be charged in this case!**- **i hid pid**
 This command **must** follow a client's request to retrieve his data. 
 For example, let's assume that you had the commands described above and you get a new one **1 100 5**. In this case, we have to respond with **i 5 125** as you stored the data from client 100 on hdd5 and the *5-th* cell of data is located on the *125-th* cell on hdd5.
 **Note: If you do not have the requested data, *hid* and *pid* must be equal to -1 (and you will pay a **fixed penalty** - see input and scoring sections).
 Note: If you report a false information (i.e. the *pid-th* cell on the hdd *hid* doesn't contain the request cell), you will get a WA. Everyone hates fake information!** 
 There are other types of commands that you can use in order to manage the data warehouse:

- **b t**
 Buy a new hard-disk of type *t*. The newly purchased hard-disk will get the next available id starting from zero (the first one you buy will have id 0, the second one will have id 1 and so on). - **cp hidsource pidsource q hiddestination piddestination**
 Copy *q* cells of data from hard-disk *hidsource*, starting at *pidsource*, to hard-disk *hiddestination*, starting at *piddestination*. 
### Interactive

 This task is **interactive**. You have to write a program that will interact with a custom judge (i.e. the judge is deterministic but the events you get will depend on your program behavior).
 You have to start by reading the number of events, the number of types of hard-drives and their description (see Input section for more details). This information doesn't depend on your program.
 Then you are able to exchange messages with the judge. There are three types of messages:

- **g**
 If there are still events to handle, you can use this type of message to get a new one. You will get a event of one of the three types described in above.
 **Note**: If you ask for a new request even if you haven't solved the last one or if there are no more events you will get a WA. - **p cmd**
 You can use this type of message to send a command **cmd** to the judge. The command can have any form described in the statement. - **end**
 This message **must** be sent in order to end the interaction with the judge. If the message is not sent the judge will crash with a WA. 
**Note: Both types of messages must end with a newline ('\\n' character)**.

**Note: Don't forget to flush the output buffer (i.e. stdout)**.

### Scoring

Everything has a price!

Hard-disks cost money and they read and write at different speeds (so there are different costs for reading/writing)

Storing and retrieving data also has a price.

If you store *q* units of data on a hard-disk that writes data at *w* units per second the cost of this operation will be *q \* w*.

If you read *q* units of data from a hard-disk that reads at speed *r* units per second, the operation will cost you *q \* r*.

If you do not have some requested data (you didn't store it or you overwrote the cell) you **must** pay a fixed **penalty**.

Your score for one test is the sum of costs for all the commands that you make.

The final score is the sum of scores in all tests. The goal is to **minimize** that score.

If your program works incorrectly on any of the tests, you will get a WA. Otherwise, you will get AC and your score will be decided by only a fraction of the tests (see test generation). The final score will be revealed after the contest.

### Input

The first line of the input file contains two integers, **N** and **H**, where **N** is the number of events and **H** is the number of types of hard-disks available.

 The next **H** lines will contain 4 integers **p** **r** **w** **c** (separated by spaces), where **p** is the price associated with this type of hard-disk, **c** is the capacity (there are **c** data-cells) and **r** and **w** are the reading/writing speeds (costs) or this type.
 The next line will one contain integer, **penalty**, the penalty you pay if you don't have the requested data.
 All **N** events are generated by the judge when they are requested by your program. ### Output

The output file will be your program's interaction with the judge.

**Note**: Please read the constraint on the maximum number of messages!

### Constraints and extra notes

- **Note: Do NOT add extra spaces or tabs in any message or command! You will probably get a WA verdict.**
- **Note: You are allowed to send at most 40,000 p (POST) messages.**
- **Note: Copying data from a hard-disk to another doesn't affect the source hdd but overwrites the cells in the second one. Only bounds are checked!**
- **Note: The judge might return a WA even if another verdict was expected (ex: waiting for a response)**
- **Note: The judge is NOT adaptive! (i.e. it won't try to purposely generate events to increase your score)**
- **Note: All commands are executed in linear time! (ex: a cp command is done in O(q))**
- A message is what you send/receive to/from the judge. A command is an instruction that is contained within a message and is designed to be executed by the DWH managing system!
- A unit of data is equal to one cell.
- There are 20,000 events (i.e. **N = 20,000** for all tests).
- There are at most 10 types of hard-disks.
- **You can buy at most 1050 hard-disks.**
- The price of a hard-disk is an integer between 1 and 200,000
- The capacity of a hard-disk is an integer between 1 and 25,000
- The reading and writing speeds are integers between 1 and 1000
- The penalty is an integer between 50,000 and 700,000
- Clients can be uniquely identified by their ids, which are numbers between 1 and 100,000
- **A client can store at most 1000 data-cells.**
- A client can store data **only once**.
- A client can ask for his data **multiple times**.
- Everything is **0-based** (unless otherwise specified).
- You **must** print **-1 -1**if you do not have some requested cell! Any other pair of numbers will get you a WA!
- A hard-disk can crash multiple times. The data will be erased (and lost) every single time! The hard-disk can be reused after that!
- It is guaranteed that for all input files will contain at least one type of hard-disk with capacity **at least 10,000.**
- There are only male clients because the author was too lazy to add 'she' or 'her' all over the statement.
- The author would like to apologize for the long statement!

### Test generation

 There are 20 tests. For each one of them **N**, **H**, the hard-disks' descriptions and the penalty were created 'by hand' (i.e. are not random).
 All events are generation on the run (randomly), based on your program.

 Each type of hard-disk is a small variation of the below types:

- A very cheap (less than 10) hard-disk with low costs (less than 25) for reading and writing but small (less than 50) capacity.
- A very expensive (at least 85,000) hard-disk with low costs (less than 25) for reading and writing and big (at least 1000) capacity.
- A decent-priced (about 1000) hard-disk with low (less than 25) read (or write) cost and small (about 50) capacity.
- Randomly generated (all 4 attributes) hard-disks!
 
 
 **Note**: There is **no** guarantee that each test will contain at least one hard-disk from every category!  There are several types of datasets:

1. Events distribution: 20% store, 70% index, 10% crash (4 tests)
2. Events distribution: 50% store, 45% index, 5% crash (3 tests)
3. Events distribution: 60% store, 35% index, 5% crash (3 tests)
4. Events distribution: 70% store, 20% index, 10% crash (3 tests)
5. Events distribution: 35% store, 50% index, 15% crash (4 tests)
6. Events distribution: 49% store, 50% index, 1% crash (3 tests)
 
 During the contest, your program will run on 6 tests (one from each category). ### Example

<pre><b>Input:</b>
5 2
100 10 20 2000
50 20 10 2000
30000
</pre>
**Interaction**The user should first read N, H, the description of the hard-disks, and the penalty from standard input (as mentioned in the Input section). Then, the interaction between the two programs (some message exchanges and the end command) should be: ```

<b>User</b>              <b>Judge</b>
p b 0
p b 1
g
                          0 123 200
p s 0 0
g
                          1 123 55
p i 0 55
p cp 0 10 45 1 10
g
                          2 0
g
                          1 123 0
p i -1 -1
g
                          1 123 12
p i 1 12
end
<pre>
### Explanation

The cost for buying the two hard-disks is 100 + 50 = 150.

The store operation is executed on a hard-disk of type 0 and so it costs 20 \* 200 = 4000.

The first post operation (the first index) is just a read on a type 0 hdd and so it costs 10.

The second post operations is a copy from a type 0 hdd to a type 1 hdd and so it costs: 10 \* 45 (to read) + 10 \* 45 (to write) = 450 + 450 = 900.

The crash doesn't cost you a thing! :)

The fourth get will cost you a penalty fee (of 30000) because the *0-th* cell was not copied on the second hard-disk and was erased by the crash.

The fifth (and last) get is a read from a type 1 hdd and so it costs 20.

The total score for this test is 150 + 4000 + 10 + 900 + 30000 + 20 = 35080.
