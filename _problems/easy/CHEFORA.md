---
{"category_name":"easy","problem_code":"CHEFORA","problem_name":"Chef vs Bharat","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/ld26SbyxeEc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"singlabharat","problem_tester":"","date_added":"18-06-2021","tags":{"0":"easy","1":"july21","2":"prefix","3":"singlabharat"},"problem_difficulty_level":"Easy","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/CHEFORA","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFORA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/CHEFORA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/CHEFORA.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/CHEFORA.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/CHEFORA.pdf) as well.

Chef and his friend Bharat have decided to play the game "The Chefora Spell".

In the game, a positive integer $N$ (in decimal system) is considered a "Chefora" if the number of digits $d$ is **odd** and it satisfies the equation $$N = \sum_{i=0}^{d-1} N_i \cdot 10^i,$$

where $N_i$ is the $i$-th digit of $N$ from the left in $0$-based indexing.

Let $A_i$ denote the $i$-th **smallest** Chefora number.

They'll ask each other $Q$ questions, where each question contains two integers $L$ and $R$. The opponent then has to answer with

$$\left(\prod_{i=L+1}^R (A_{L})^{A_{i}}\right) \bmod{10^9+7}.$$


Bharat has answered all the questions right, and now it is Chef's turn. But since Chef fears that he could get some questions wrong, you have come to his rescue!

###Input
- The first line contains an integer $Q$ - the number of questions Bharat asks.
- Each of the next $Q$ lines contains two integers $L$ and $R$.

###Output
Print $Q$ integers - the answers to the questions on separate lines.

###Constraints
- $1 \leq Q \leq 10^5$
- $1 \leq L < R \leq 10^5$

###Subtasks
**Subtask #1 (30 points)**:
- $1 \leq Q \leq 5 \cdot 10^3$
- $1 \leq L < R \leq 5 \cdot 10^3$

**Subtask #2 (70 points)**: Original constraints

###Sample Input
```
2
1 2
9 11
```

###Sample Output
```
1
541416750
```

###Explanation
- For the first question:
$$(A_1)^{A_2}=1^2=1.$$

- For the second question:
$$(A_9)^{A_{10}}\cdot (A_9)^{A_{11}}=9^{101}\cdot 9^{111}\equiv 541416750 \pmod{10^9+7}.$$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>