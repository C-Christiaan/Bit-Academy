love.graphics.setDefaultFilter("nearest", "nearest")
function love.load()
    camera = require("camera")
    player = {}
    player.x = 0
    player.y = 10
    player.speed = 10
    player.sprite = love.graphics.newImage("player.png")
    cam = camera()
    grass = love.graphics.newImage("grass.png")
    player.isLeft = true
end
function love.update(dt)
    cam:zoomTo(4)
    if love.keyboard.isDown("d") then
        player.x = player.x + player.speed
        player.isLeft = false
    end
    if love.keyboard.isDown("a") then
        player.x = player.x - player.speed
        player.isLeft = true
    end
    if love.keyboard.isDown("s") then
        player.y = player.y + player.speed
    end
    if love.keyboard.isDown("w") then
        player.y = player.y - player.speed
    end
    cam:lookAt(player.x, player.y)
end
function love.draw()
    cam:attach()
    love.graphics.draw(grass, 0, 0)
    if player.isLeft == true then
        love.graphics.draw(player.sprite, player.x, player.y, nil, -1, 1, 9)
    else 
        love.graphics.draw(player.sprite, player.x, player.y)
    end
    cam:detach()
end