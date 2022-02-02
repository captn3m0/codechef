---
{"category_name":"easy","problem_code":"PALNUM","problem_name":"Palindromic number","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^3$\n- $1 \\leq N \\leq 10^5$\n- $0 \\leq M \\leq 90$\n- $0 \\leq K, W_i \\leq 10^9$\n- $0 \\leq X_i, Y_i \\leq 9$, $X_i\\ne Y_i$\n- The sum of $N$ over all test cases does not exceed $10^6$.\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line contains an integer $T$, the number of test cases. Then the test cases follow.\n- The first line of each test case contains three integers $N$, $M$, and $K$ - the length of the string, the number of operation types, and the maximum number of coins to spend, respectively.\n- The second line contains a string $S$ of length $N$.\n- Each of the next $M$ lines contains three integers $X_i$, $Y_i$ and $W_i$ - the parameters of the $i$-th type of operation.","inputFormatState":true,"outputFormat":"For each test case, output the lexicographically maximum palindrome which can be obtained from the given string $S$ using at most $K$ coins. Print `-1` if it is impossible to obtain a palindrome. ","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3 \n5 10 10\n75643\n0 1 1\n1 2 1\n2 3 1\n3 4 1\n4 5 1\n5 6 1\n6 7 1\n7 8 1\n8 9 1\n9 0 1\n4 5 1000000\n1895\n2 3 10\n3 1 9\n1 2 5\n5 6 99\n8 9 45\n6 4 12\n141746\n1 5 3\n5 7 2\n7 9 10\n6 1 5","output":"95759\n-1\n147741","explanation":"  - In the first test case, we convert $7$ and $3$ into $9$ using two and six operations, respectively, $4$ into $5$ using one operation, and $6$ to $7$ using one operation. There is no way to obtain a palindrome which is lexicographically larger than $95759$ using ten operations.\n  - In the second test case, there is no possible way to convert $1$ and $5$ into equal digits. So we can\u0027t obtain a palindrome.\n  - In the third test case, we convert the $6$ in the last index of the given string into $1$ using the $4$-th type of operation. So $S$ becomes $141741$. Next, we convert $1$ in the third index into $5$ using the $1$-st type of operation. So $S$ becomes $145741$. Then we convert the $5$ in the third index of $S$ into $7$ using the $2$-nd type of operation. So $S$ becomes $147741$. The total cost is $5 + 3 + 2 = 10$ coins and the string we obtain after all operations is a palindrome. We can\u0027t obtain a lexicographically larger string than $147741$ using at most $12$ coins.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/H6P_59iDYOA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"soumyadeep_21","problem_tester":"","date_added":"6-07-2021","tags":{"0":"easy","1":"floyd","2":"palindrome","3":"soumyadeep_21","4":"start6"},"problem_difficulty_level":"Easy-Medium","best_tag":"Floyd Warshall","editorial_url":"https://discuss.codechef.com/problems/PALNUM","time":{"view_start_date":1627126200,"submit_start_date":1627126200,"visible_start_date":1627126200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PALNUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/START6/russian/PALNUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START6/mandarin/PALNUM.pdf), [Bengali](https://www.codechef.com/download/translated/START6/bengali/PALNUM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START6/vietnamese/PALNUM.pdf) as well.

You are given a string $S$ consisting of $N$ digits from $0$ to $9$. You want to obtain a palindrome from $S$ using some operations. 

There are $M$ different types of operations you can make on $S$. Each operation is described by three integers  $X$, $Y$ and $W$. In this operation, if there is a digit equal to $X$ in $S$, you can replace $X$ with $Y$ using $W$ coins. For example, if $X = 4, Y= 5, W = 10$ and $S = 1448$, you make $S$ equal to either $1458$ or $1548$ using $10$ coins. 

You can do the operations in any order. One type of operation can be done multiple times. You can use at most $K$ coins total in all operations. Among all the palindromes that can be obtained from $S$, output the lexicographically maximum palindrome.

If two strings $A$ and $B$ have the same length, we say that $A$ is lexicographically larger than $B$ if there exists an index $i$ so that $A_1=B_1,A_2=B_2,\ldots,A_{i-1}=B_{i-1}, A_i>B_i$.

Print $-1$ if it is impossible to obtain a palindrome from $S$ using at most $K$ coins.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>