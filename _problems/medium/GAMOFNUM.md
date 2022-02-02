---
{"category_name":"medium","problem_code":"GAMOFNUM","problem_name":"Game of numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"kotlin"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"akash4983","problem_tester":null,"date_added":"15-12-2018","tags":{"0":"akash4983"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Alice and Bob love playing games, and this time they are playing with an array of $N$ integers. They take turns alternatively, with Alice having the first turn. In a player's turn the player can pick any number (say $x$) which is greater than 1 from the array. Then the player transforms the number $x$ into $(x * i) / p$, where $p$ is any prime number which divides $x$ and $i$ is an integer in range $[1, p)$, that is $1 \leq i < p$. Then the player places the transformed number back in array in place of $x$. The player who can not make a move loses.

###Input:
- The first line contains $T$, which is the number of test cases. 
- The first line of each test case denotes the size of the array which is $N$. 
- The second line of each test case contains $N$ space separated integers. which represent the original array.

###Output:
Print one line per test case i.e. the winner of the game in that test case. It should either be "Alice" or "Bob".

###Constraints 
- $1 \leq T \leq 100000$
- $1 \leq N \leq 100000$
- $1 \leq$ array elements $\leq 500000$
- Sum of $N$ over all testcases per file won't exceed $2 * 10^5$

###Sample Input:
```
2
2
2 2
1
2
```

###Sample Output:
```
Bob
Alice
```

###Explanation:
**Testcase 1**: The array is originally {2, 2}. Alice has no choise but to pick up one of the 2. And she has no choice in $p$ either. $p = 2$ is the only choice, as no other prime number divides 2. $i=1$ is the only choice. So Alice transforms one of the 2 into (2*1)/2 = 1. So now the array becomes {1, 2} or {2, 1}. Now, Bob has no choice but to pick up the remaining 2. And as with Alice, he will be forced to transform it into 1. The array then becomes {1, 1} and now Alice cannot make any move, and so Bob wins.

**Testcase 2**: Original array is {2}, and as in the previous testcase, Alice will convert it into {1} and now Bob has no move, and so Alice wins.