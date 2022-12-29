import random

def permainan():
    

    poinsistem = 0
    poinmu = 0
    sistem_acak = random.randint(1, 3)
    komputer = (sistem_acak)
    while ( poinmu < 3 ):
        if poinmu > 2:
            print (50*"😄")
            print(" Kamu Menang")
            print (50*"😄")
            poinmu += 1
        elif poinsistem > 2:
            print (50*"😰")
            print (" Kamu Kalah")
            print (50*"😰")
            return
        else:
            print (" ")
            print (50*"=")
            print("LANJUT BERMAIN")
            print (50*"=")
            print("Ayo Pilih Gunting Kertas atau Batu")
            print("1. Gunting")
            print("2. Kertas")
            print("3. Batu")
            pilihanmu=int(input("Masukan Pilihan kamu:" ))
            print (50*"=")
            print (" ")
            print (50*"=")
            print ("Kamu Memilih",pilihanmu)
            print ("Komputer memilih:", komputer)
            print (50*"=")
            
            
            if pilihanmu > 3:
                print ("pilihanmu tidak valid")
                print ("pilihan antara 1 2 atau 3")
                continue
            else:
                
                
                
                
                if pilihanmu == 1 and komputer == 1:
                    print("Gunting vs Gunting")
                    print("Seri")

                elif pilihanmu == 1 and komputer == 2:
                    print("Gunting vs Kertas")
                    poinmu += 1
                    print("Kamu Menang")
                    print("pointmu:", poinmu)


                elif pilihanmu == 1 and komputer == 3:
                    print("Gunting vs Batu")
                    print("Kamu kalah")
                    poinsistem+= 1
                    print("pointsistem:", poinsistem)


                elif pilihanmu == 2 and komputer == 1:
                    print("Kertas vs Gunting")
                    print("Kamu Kalah")
                    poinsistem += 1
                    print("pointsistem:", poinsistem)


                elif pilihanmu == 2 and komputer == 2:
                    print("Kertas vs Kertas")
                    print("Seri")



                elif pilihanmu == 2 and komputer == 3:
                    print("Kertas vs Batu")
                    poinmu += 1
                    print("Kamu Menang")
                    print("pointmu:", poinmu)


                elif pilihanmu == 3 and komputer == 1:
                    print("Batu vs Gunting")
                    poinmu += 1
                    print("Kamu Menang")
                    print("pointmu:", poinmu)


                elif pilihanmu == 3 and komputer == 2:
                    print("Batu vs Kertas")
                    print("Kamu Kalah")
                    print("pointsistem:", poinsistem)
                    poinsistem +=1

                elif pilihanmu == 3 and komputer == 3:
                    print("Batu vs Batu")
                    print("Seri")
                    
            print(50*"=")
            print ("POINMU SEKARANG", poinmu)
            print ("POIN SISTEM SEKARANG", poinsistem)
            print (50*"=")

permainan()

