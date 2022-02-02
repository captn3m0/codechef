---
{"category_name":"school","problem_code":"CRDGAME","problem_name":"Chef and Card Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n10 4\r\n8 12\r\n7 6\r\n2\r\n5 10\r\n3 4","output":"0 2\r\n2 1","explanation":"**Test Case** $1$:\r\n\r\n**Round** $1$: \r\n\r\nChef’s card has power $1+0$ = $1$,     \r\nMorty’s card has power $4$.      \r\nTherefore, Morty wins the round.        \r\n\r\n**Round** $2$: \r\n\r\nChef’s card has power $8$,        \r\nMorty’s card has power $1 + 2$ = $3$.       \r\nTherefore, Chef wins the round.     \r\n\r\n**Round** $3$: \r\n\r\nChef’s card has power $7$,      \r\nMorty’s card has power $6$.      \r\nTherefore, Chef wins the round.         \r\n\r\nTherefore, Chef wins the game with $2$ points (Morty has $1$ point).  \r\n\r\n**Test Case** $2$:\r\n\r\n**Round** $1$: \r\n\r\nChef’s card has power $5$,     \r\nMorty’s card has power $1 + 0 = 1$.      \r\nTherefore, Chef wins the round.        \r\n\r\n**Round** $2$: \r\n\r\nChef’s card has power $3$,        \r\nMorty’s card has power $4$.       \r\nTherefore, Morty wins the round.     \r\n\r\nTherefore, the game ends in a draw and both players have $1$ point each.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"2-07-2020","tags":{"0":"aryanag_adm","1":"cakewalk","2":"implementation","3":"july20","4":"rajarshi_basu"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CRDGAME","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CRDGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/CRDGAME.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/CRDGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/CRDGAME.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/CRDGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/CRDGAME.pdf) as well.

Chef is playing a card game with his friend Morty Smith. 

The rules of the game are as follows:
 - There are two piles of cards, pile $A$ and pile $B$, each with $N$ cards in it. Pile $A$ belongs to Chef and pile $B$ belongs to Morty.
 - Each card has one positive integer on it
 - The ‘power’ of a card is defined as the sum of digits of the integer on that card
 - The game consists of $N$ rounds
 - In each round, both players simultaneously draw one card each from the top of their piles and the player who draws the card with higher power wins this round and gets a point. If the powers of both players' cards are equal then they get $1$ point each. 
 - The winner of the game is the player who has more points at the end of $N$ rounds. If both players have equal number of points then the game ends in a draw.

The game is now over and Chef has told Morty to find the winner. Unfortunately, this task is too complex for him. Help Morty find the winner. 

### Input:

- First line will contain $T$, number of testcases.
- The first line of each test case will contain $N$, the number of rounds played.
- The $i^{th}$ of the next $N$ lines of each test case will contain $A_i$ and $B_i$, the number on the card drawn by Chef and Morty respectively in round $i$.

### Output:
For each test case, output two space separated integers on a new line:      
Output      
 - $0$ if Chef wins,             
 - $1$ if Morty wins,     
 - $2$ if it is a draw,     
followed by the number of points the winner had.     
(If it is a draw then output either player’s points).

### Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 100$
- $1 \leq A_i, B_i \leq 10^9$

### Subtasks
- $100$ points : No additional constraints

### Sample Input:
```
2
3
10 4
8 12
7 6
2
5 10
3 4
```

### Sample Output:
```
0 2
2 1
```
	
### Explanation:

**Test Case** $1$:

**Round** $1$: 

Chef’s card has power $1+0$ = $1$,     
Morty’s card has power $4$.      
Therefore, Morty wins the round.        

**Round** $2$: 

Chef’s card has power $8$,        
Morty’s card has power $1 + 2$ = $3$.       
Therefore, Chef wins the round.     

**Round** $3$: 

Chef’s card has power $7$,      
Morty’s card has power $6$.      
Therefore, Chef wins the round.         

Therefore, Chef wins the game with $2$ points (Morty has $1$ point).  

**Test Case** $2$:

**Round** $1$: 

Chef’s card has power $5$,     
Morty’s card has power $1 + 0 = 1$.      
Therefore, Chef wins the round.        

**Round** $2$: 

Chef’s card has power $3$,        
Morty’s card has power $4$.       
Therefore, Morty wins the round.     

Therefore, the game ends in a draw and both players have $1$ point each.

     
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>